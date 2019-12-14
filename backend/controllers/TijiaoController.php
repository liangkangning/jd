<?php

namespace backend\controllers;

use common\helpers\ArrayHelper;
use common\helpers\TijiaoHelper;
use common\models\Blog;
use common\models\Category;
use common\models\Images;
use common\models\produclist;
use Yii;
use backend\models\User;
use backend\models\search\UserSearch;

class TijiaoController extends BaseController
{
    /**
     * ---------------------------------------
     * 构造方法
     * ---------------------------------------
     */
    public function init(){
        parent::init();
    }

    /**
     * ---------------------------------------
     * 用户列表
     * ---------------------------------------
     */
    public function actionIndex()
    {
        echo 2;
    }
    public function actionXiong(){

         $list=Blog::find()->select(['id'])->asArray()->all();
         $lists=array_chunk($list,1000);
//         var_dump($lists);
        foreach ($lists as $key=>$value){
            $urls=array();
            foreach ($value as $k=>$v){
                $urls[]='http://m.juda.cn/blog/mip/'.$v['id'].'.html';
            }
        $api = 'http://data.zz.baidu.com/urls?appid=1598968113743665&token=J4RTmchW7xPUHcBr&type=batch';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;
        }
    }

    public function actionZiyuan(){

        $list=Blog::find()->select(['id'])->asArray()->all();
        $lists=array_chunk($list,1000);
//         var_dump($lists);
        foreach ($lists as $key=>$value){
            $urls=array();
            foreach ($value as $k=>$v){
                $urls[]='http://m.juda.cn/blog/mip/'.$v['id'].'.html';
            }
            $api = 'http://data.zz.baidu.com/urls?site=m.juda.cn&token=84iTfEE4XLM5kfm5&type=mip';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            echo $result;
        }
    }
    public function actionXiongproduct(){

        $list=Images::find()->select(['id'])->asArray()->all();
        $lists=array_chunk($list,1000);

        foreach ($lists as $key=>$value){
            $urls=array();
            foreach ($value as $k=>$v){
                $urls[]='http://m.juda.cn/product/mip/'.$v['id'].'.html';
            }
            $api = 'http://data.zz.baidu.com/urls?appid=1598968113743665&token=J4RTmchW7xPUHcBr&type=batch';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            echo $result;
        }
    }
    public function actionZiyuanproduct(){

        $list=Images::find()->select(['id'])->asArray()->all();
        $lists=array_chunk($list,1000);

        foreach ($lists as $key=>$value){
            $urls=array();
            foreach ($value as $k=>$v){
                $urls[]='http://m.juda.cn/product/mip/'.$v['id'].'.html';
            }
            $api = 'http://data.zz.baidu.com/urls?site=m.juda.cn&token=84iTfEE4XLM5kfm5&type=mip';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            echo $result;
        }
    }

    public function actionProduct_list(){
       $ca=ArrayHelper::getColumn(Category::find()->where(['in','pid',[8,13]])->select('name')->asArray()->all(),'name');
      $urls=array();
      foreach ($ca as $key=>$value){
          $urls[]='http://m.juda.cn/mip/'.$value.'/';
      }
        TijiaoHelper::TijiaoUrl($urls);
//       var_dump($urls);
       $product= produclist::find()->select('url')->where(['>','num',1])->groupBy('products')->orderBy('url')->asArray()->all();
        $product_list=ArrayHelper::getColumn($product,'url');
       TijiaoHelper::TijiaoUrl($product_list);

    }





}
