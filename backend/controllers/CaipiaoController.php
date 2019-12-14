<?php

namespace backend\controllers;

use Yii;
use backend\models\Ad;
use backend\models\search\AdSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * 栏目控制器
 * 作者 ：longfei
 * Email ：phphome@qq.com
 */
class CaipiaoController extends BaseController
{


    /**
     * ---------------------------------------
     * 列表页
     * ---------------------------------------
     */
    public function actionIndex()
    {

        require Yii::getAlias('@web/extensions/phpexcel/PHPExcel.php');        //引入PHPExcel

        $data = array();
        //读取Excel
        $phpexcel = new \PHPExcel;
        $excelReader = \PHPExcel_IOFactory::createReader('Excel5');
        $excelFile=Yii::getAlias('@app/web/file/a.xls');
        $phpexcel = $excelReader->load($excelFile)->getSheet(0);//载入文件并获取第一个sheet
        $total_line = $phpexcel->getHighestRow();            //多少行
        $total_column = $phpexcel->getHighestColumn();       //多少列

        $all=array();
        for($row = 1; $row <= $total_line; $row++) {
            $oneUser = array();
            for ($column = 'A'; $column <= 'K'; $column++) {
                if ($column>=$total_column){
                    $dd=\PHPExcel_Shared_Date::ExcelToPHP(($phpexcel->getCell($column . $row)->getValue()));
                    $oneUser[] =date('H:i:s',$dd);
                    break;
                }else{
                    $oneUser[] = trim($phpexcel->getCell($column . $row)->getValue());
                }
            }
            $all[]=$oneUser;
        }
        Yii::$app->params['history']=$all;
        $begin_jishu=1;//投注的基数
        $num_array=array(0,1,2,3,4,5,6,7,8,9);
        $touzhu=array();
        $befor_five=array();
        foreach ($all as $key=>$value){
            $befor_five[]=$value[1];
        }
        foreach ($befor_five as $key=>$value){
            $list=array();
            $list=explode(',',$value);

            foreach ($list as $k=>$v){
                if (in_array($v,$num_array)){
                    $arr=array();
                    $arr['num']=$v;
                    $arr['money']=$begin_jishu;
                    $arr['win_money']='';
                    $touzhu[]=$arr;
                    unset($num_array[$v]);
                }
            }
            $begin_jishu=$begin_jishu*2;
        }
//        $touzhu=$this->my_sort($touzhu,'num','SORT_ASC');
        Yii::$app->params['touzhu']=$touzhu;
//        var_dump($touzhu);
//        $touzhu=$this->jisuan_meiqi_winOrLose($touzhu,$zhong_num);


        return $this->render('index',['data'=>$data]);
    }


    public function jisuan_meiqi_winOrLose($list,$zhong){
        $num_array=array(0,1,2,3,4,5,6,7,8,9);
        foreach ($num_array as $key=>$value){
            if (!in_array($value,ArrayHelper::getColumn($list,'num'))){
                $a['num']=$value;
                $a['money']=0;
                $a['win_money']=0;
                array_push($list,$a);
            }
        }
        foreach ($list as $key=>$value){
            if (in_array($value['num'],$zhong)){
                $chongfu=array_count_values($zhong);
                $list[$key]['win_money']=$value['money']*19.5*0.2*$chongfu[$value['num']];
            }else{
                $list[$key]['win_money']=0;
            }
        }
        $list=$this->my_sort($list,'num',SORT_ASC);
        return $list;

    }

    function my_sort($arrays,$sort_key,$sort_order=SORT_ASC,$sort_type=SORT_NUMERIC ){
        if(is_array($arrays)){
            foreach ($arrays as $array){
                if(is_array($array)){
                    $key_arrays[] = $array[$sort_key];
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
        array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
        return $arrays;
    }

}
