<?php



namespace frontend\controllers;

use common\models\ArticleFrom;
use yii\web\Controller;
use Yii;
use yii\filters\VerbFilter;
class ApisController extends Controller

{
    public function init(){
        parent::init();
        $this->enableCsrfValidation = false;

    }

    /**

     * @var string

     */


    public function actionIndex()

    {
//        echo '增加信息成功';
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            $ar = new ArticleFrom();
            if (strlen($post['title'])<1 || strlen($post['content'])<1){
                echo '发表错误';return;
            }
            $res=ArticleFrom::find()
                ->where(['url'=>$post['url']])
                ->one();
            if ($res){
                echo '标题重复';return;
            }
            $ar->title = $post['title'];
            $ar->content = $post['content'];
            $ar->ctime = time();
            $ar->from = $post['from'];
            $ar->url = $post['url'];
            $ar->keywords = $post['keywords'];
            $ar->description = $post['description'];
            $ar->save();
            echo '增加信息成功';
        }

    }




}

