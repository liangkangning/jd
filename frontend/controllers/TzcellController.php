<?php/** * Created by PhpStorm. * User: Administrator * Date: 2018/1/17 0017 * Time: 下午 1:52 */namespace frontend\controllers;use common\helpers\ArrayHelper;use common\models\Images;use  yii;class TzcellController extends CommonController{//    public function behaviors()//    {//        return [//            [//                'class' => 'yii\filters\PageCache',//                'duration' =>24*60*60,//                'variations' => [//                    \Yii::$app->language,//                ],////            ],//        ];////    }    public function actionIndex()    {        parent::common();        $diwen_list=parent::ca_image_list(67,8,'sort desc');        $kuanwen_list=parent::ca_image_list(68,8, 'sort desc');        $taisuanli_list=parent::ca_image_list(69,8, 'sort desc');        $fanbao_list=parent::ca_image_list(70,8, 'sort desc');        $title = ['低温18650电芯（可定制）',            '低温聚合物电芯（可定制）',            '特种26650电芯（可定制）',            '防爆电芯（可定制）',        ];        $url = ['/diwen/',            '/kuanwen/',            '/fanbao/',            '/taisuanli/',        ];        $color = ['color_tzcell',            'color_tzcell',            'color_tzcell',            'color_tzcell',        ];        $images = ['tz_cell_18650.jpg',            'tz_cell_juhewu.jpg',            'tz_cell_26650.jpg',            'tz_cell_fangbao.jpg',        ];        $list = [            $diwen_list,            $kuanwen_list,            $taisuanli_list,            $fanbao_list,        ];        $text = [            '低温锂电池是指工作温度在-20℃以下，同时可满足锂离子电池国标GB31241-2014或者中华人民共和国国家军用标准GJB4477-2002要求的锂离子电池。',            '宽温锂电池是指工作温度范围-50℃~70℃的锂离子电池，电池内阻低、放电倍率高、放电平台稳定；具有容量高、自放电低、长循环、寿命长等特点',            '防爆锂电池防爆锂电池是一种新型的锂电池产品，采用高安全系数材料制造，有效遏制电池爆炸的安全电池。防爆锂电池的安全特性是其最大的特点。',            '钛酸锂电池是以钛酸锂作为负极材料，锰酸锂、三元材料或磷酸铁锂等正极材料组成2.4V或1.9V的锂离子二次电池。',        ];        $data = [];        foreach ($title as $key=>$value) {            $data[$key]['title'] = $title[$key];            $data[$key]['url'] = $url[$key];            $data[$key]['color'] = $color[$key];            $data[$key]['list'] = $list[$key];            $data[$key]['images'] = $images[$key];            $data[$key]['text'] = $text[$key];        }        return $this->render('index',['data'=>$data]);    }}