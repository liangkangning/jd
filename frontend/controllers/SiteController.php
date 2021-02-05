<?php



namespace frontend\controllers;



use common\helpers\Sitemap;
use common\models\Article;
use common\models\Blog;
use common\models\Category;
use common\models\Images;
use common\models\Keywords;
use common\models\SitemapProduct;
use yii\data\Pagination;
use yii\web\Controller;

use yii;


class SiteController extends Controller

{


    /**

     * @var string

     */
    public $time;
    public $home;
    public $data;

    public function init(){
        $this->time=date('Y-m-d',time());
        $this->home = Yii::$app->request->getHostInfo();
        $this->data = [];
    }

    /**
     * 首页、产品频道/列表、keywords聚合页、研发、关于钜大等，文章列表除外
     */
    public function actionProductList(){
        //首页
        $this->data[]=[
            'loc' => $this->home,
            'priority'=>'1.0',
            'lastmod'=>$this->time,
            'changefreq'=>'Daily'
        ];
        //特种锂电池 分类
        $this->categoryData('8');

        //工业 分类
        $this->categoryData('13');

        //定制案例 分类
        $this->categoryData('28');

        //研发&制造 分类
        $this->categoryData('39',false);

        //关于我们 分类
        $this->categoryData('1',false);

        //keywords聚合页
        $this->data[]=[
            'loc' => $this->home.'/keywords/',
            'priority'=>'0.8',
            'lastmod'=>$this->time,
            'changefreq'=>'Daily'
        ];
        foreach (Keywords::find()->where(['status'=>1])->all() as $key=>$value){
            $this->data[]=[
                'loc' => $this->home.$value->url,
                'priority'=>0.6,
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }

        //产品属性页
        $site_list = SitemapProduct::find()->where(['status' => 1])->limit("50000")->asArray()->all();
        foreach ($site_list as $key=>$value){
            if (count($this->data)>=50000){
                break;
            }
            $this->data[]=[
                'loc' => $this->home.$value->url,
                'priority'=>0.6,
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }

        return $this->createXml($this->data);
    }

    public function actionNewsList(){
        //资讯中 分类
        $this->categoryData('34');
        $ids = Article::find()->where(['status' => 1])->select('id')->orderBy('id asc')->limit('45000')->asArray()->all();
        $ids = array_column($ids, 'id');
        foreach ($ids as $id) {
            $this->data[]=[
                'loc' => $this->home.'/news/'.$id.'.html',
                'priority'=>0.6,
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }

        return $this->createXml($this->data);
    }

    public function actionNewsList1(){
        //资讯中 分类
        $pagination = new Pagination(['totalCount' => 200]);

        $ids = Article::find()->where(['status' => 1])->select('id')->orderBy('id asc')->offset('45000')->limit('45000')->asArray()->all();
        $ids = array_column($ids, 'id');
        foreach ($ids as $id) {
            $this->data[]=[
                'loc' => $this->home.'/news/'.$id.'.html',
                'priority'=>0.6,
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }

        return $this->createXml($this->data);
    }

    public function actionNewsList2(){
        //资讯中 分类

        $ids = Article::find()->where(['status' => 1])->select('id')->orderBy('id asc')->offset('90000')->limit('50000')->asArray()->all();
        $ids = array_column($ids, 'id');
        foreach ($ids as $id) {
            $this->data[]=[
                'loc' => $this->home.'/news/'.$id.'.html',
                'priority'=>0.6,
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }

        return $this->createXml($this->data);
    }

    /**
     * 产品详情页
     */
    public function actionProductDetailList(){
        $list = Images::find()->where(['status' => 1])->all();
        $data = [];
        $monday = date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 1) * 24 * 3600));//周一的时间
        foreach ($list as $item) {
            $data[] = [
                'loc' => $this->home.$item->url,
                'priority'=>0.6,
                'lastmod'=>$monday,
                'changefreq'=>'Weekly'
            ];
        }
        return $this->createXml($data);

    }

    /**
     * 博客详情页
     */
    public function actionBlogDetailList(){
        $list = Blog::find()->all();
        $data = [];
        $monday = date('Y-m-d', (time() - ((date('w') == 0 ? 7 : date('w')) - 1) * 24 * 3600));//周一的时间
        foreach ($list as $item) {
            $data[] = [
                'loc' => $this->home.$item->url,
                'priority'=>0.6,
                'lastmod'=>$monday,
                'changefreq'=>'Weekly'
            ];
        }
        return $this->createXml($data);

    }


//    /**
//     * sitemap列表
//     */
//    public function actionSitemap(){
//
//        //rss创建
//        $obj = new Sitemap();
//
//        $this->render('sitemap',array('rss'=>$obj->show()));
//    }
//
//    public function actionSitemapXsl(){
//        $this->render('sitemapxsl');
//    }


    private function categoryData($category_id,$in_pid=true){
        if ($in_pid){
            $obj = Category::find()->where(['id' => $category_id])->orWhere(['pid' => $category_id])->orderBy('id asc')->all();
        }else{
            $obj = Category::find()->where(['pid' => $category_id])->orderBy('id asc')->all();
        }


        foreach ($obj as $item) {
            $this->data[]=[
                'loc' => $this->home.$item->url,
                'priority'=>'0.8',
                'lastmod'=>$this->time,
                'changefreq'=>'Daily'
            ];
        }
    }


    public function actionGitPull(){
        echo "新增";
        $rowData = file_get_contents('php://input', 'r');;
        $rowData = json_decode($rowData,true);
        exec('cd /home/data/shell ; sh gitpull.sh',$out);
        var_dump($out);
    }


    private function createXml($data){
        return \Yii::createObject([
            'class' => 'yii\web\Response',
            'format' => \yii\web\Response::FORMAT_XML, //设置输出的格式为 XML
            'formatters' => [
                \yii\web\Response::FORMAT_XML => [
                    'class' => 'yii\web\XmlResponseFormatter',
                    'rootTag' => 'urlset', //根节点
//                    'xmlns'=>'http://www.sitemaps.org/schemas/sitemap/0.9',
                    'itemTag' => 'url', //单元
                ],
            ],
            'data' => $data,
        ]);
    }

}
?>