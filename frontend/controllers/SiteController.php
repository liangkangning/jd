<?php



namespace frontend\controllers;



use common\helpers\Sitemap;
use yii\web\Controller;

use yii;


class SiteController extends Controller

{
    /**
     * sitemap列表
     */
    public function actionSitemap(){

        //rss创建
        $obj = new Sitemap();

        $this->render('sitemap',array('rss'=>$obj->show()));
    }

    public function actionSitemapXsl(){
        $this->render('sitemapxsl');
    }

}
?>