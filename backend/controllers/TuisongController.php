<?php

namespace backend\controllers;

use common\helpers\Html;
use common\helpers\StringHelper;
use common\models\Article;
use common\models\AttrImages;
use common\models\AttrImagesSelect;
use common\models\Blog;
use common\models\CategoryImages;
use common\models\Images;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;
use Yii;
use common\models\ImagesExpand;
use yii\data\ActiveDataProvider;
use yii\helpers\HtmlPurifier;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImagesExpandController implements the CRUD actions for ImagesExpand model.
 */
class TuisongController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }
    public function  actionIndex(){


    }
    public function  actionZiyuan(){
        $atrcle=Article::find()->where(['status'=>1])->select(['id'])->all();
        $urls=array();

        foreach ($atrcle as $key=>$value){
            $urls[]=   'http://m.juda.cn/news/mip/'.$value['id'].'.html';
        }
        $Images=Images::find()->select(['id'])->all();
        foreach ($Images as $key=>$value){
            $urls[]=   'http://m.juda.cn/product/mip/'.$value['id'].'.html';
        }

        $new_ruls=array_chunk($urls,2000);
        foreach ($new_ruls as $key=>$value){
            $urls=$value;
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
    public function actionXiong(){
        $atrcle=Article::find()->where(['status'=>1])->select(['id'])->all();
        $urls=array();

        foreach ($atrcle as $key=>$value){
            $urls[]=   'http://m.juda.cn/news/mip/'.$value['id'].'.html';
        }
        $Images=Images::find()->select(['id'])->all();
        foreach ($Images as $key=>$value){
            $urls[]=   'http://m.juda.cn/product/mip/'.$value['id'].'.html';
        }

        $new_ruls=array_chunk($urls,2000);

        foreach ($new_ruls as $key=>$value){
            $urls=$value;
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


}
