<?php
namespace frontend\controllers;
use common\helpers\ArrayHelper;
use common\helpers\StringHelper;
use common\models\Article;
use common\models\AttrImages;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Images;
use common\models\Links;
use yii\web\Controller;
use yii;
use yii\log\Logger;
class IndexController extends CommonController
{
    /**
     * @var string
     */
    public $layout = 'main';
    public function behaviors()
    {
        $reference = parse_url( $_SERVER['HTTP_REFERER'] );
        if ( stristr( $reference['host'], 'huowang.' ) ){
            //来自于百度
            return ArrayHelper::merge([
                [
                    'class' => Cors::className(),
                    'cors' => [
                        'Origin' => ['http://www.lidianchi.org/'],
                        'Access-Control-Request-Method' => ['GET', 'HEAD', 'OPTIONS'],
                    ],
                ],
            ], parent::behaviors());

        }else{
            return [
                [
                    'class' => 'yii\filters\PageCache',
                    'duration' => 1200,
                    'variations' => [
                        \Yii::$app->language,
                    ],

                ],
            ];
        }


    }
    public function actionIndex()
    {
        parent::common();
        $tezhong=parent::ca_lujin_image_list(8,8,'sort DESC');
        $tezhong_tree=ArrayHelper::CategoryList(8);
        $gongye=parent::ca_lujin_image_list(13,8,'sort DESC');
        $gongye_tree=ArrayHelper::CategoryList(13);
//        动力储能，对应12,24,36,48V
        $dianya=[11,12,13,14];
        $cuneng_ids=AttrImages::find()->where(['attr_value_id'=>$dianya])->groupBy('images_id')->asArray()->all();
        $cuneng_ids=ArrayHelper::getColumn($cuneng_ids,'images_id');
        $cuneng_list=Images::find()->where(['id'=>$cuneng_ids]) ->orderBy('sort DESC')->limit(8)->all();
//        var_dump($tezhong);
        $news_company=Article::find()->where(['category_id'=>35])->andWhere(['status'=>1])->select(['id','title','create_time','content'])->orderBy('id desc')->limit('10')->all();
        $news_hangye=Article::find()->where(['category_id'=>37])->andWhere(['status'=>1])->select(['id','title','create_time','content'])->orderBy('id desc')->limit('10')->all();
        $news_zhuanti=Article::find()->where(['category_id'=>36])->andWhere(['status'=>1])->select(['id','title','create_time','content'])->orderBy('id desc')->limit('10')->all();
        $news_zhishi=Article::find()->where(['category_id'=>38])->andWhere(['status'=>1])->select(['id','title','create_time','content'])->orderBy('id desc')->limit('10')->all();
        $news_company_toutiao=Article::find()->where(['category_id'=>35])->andWhere(['status'=>1])->andWhere(['like','np','h'])->all();
        $dingzhi=Category::find()->select(['id'])->where(['title'=>'定制案例'])->one();
        $dingzhi_id_list=Category::find()->select(['id'])->where(['pid'=>$dingzhi->id])->asArray()->all();
        $dingzhi_id_list=ArrayHelper::getColumn($dingzhi_id_list,'id');
        $fangan=Article::find()->where(['in','category_id',$dingzhi_id_list])
            ->andWhere(['status'=>1])
            ->andWhere(['like','np','h'])
            ->orderBy('sort DESC')
            ->all();
        $tree=ArrayHelper::CategoryList(28);
        $this->data['anli_tree']=$tree;
        $links=Links::find()->where(['position'=>0])->orderBy('sorrtank desc')->asArray()->all();
        $this->view->params['links']=$links;
        $this->view->params['fangan']=$fangan;
        $this->view->params['cuneng_list']=$cuneng_list;
        $this->view->params['news_company']=$news_company;
        $this->view->params['news_hangye']=$news_hangye;
        $this->view->params['news_zhuanti']=$news_zhuanti;
        $this->view->params['news_zhishi']=$news_zhishi;
        $this->view->params['news_company_toutiao']=$news_company_toutiao;
        Yii::$app->params['nav_tree_block']=true;
        $this->view->params['tezhong']=$tezhong;
        $this->view->params['tezhong_tree']=$tezhong_tree;
        $this->view->params['gongye_tree']=$gongye_tree;
        $this->view->params['gongye']=$gongye;




        //首页特种 动力 工业 案例
        $list_name = ['index-tezhong'=>'images','index-dongli'=>'images','index-gongye'=>'images','index-case'=>'news'];
        foreach ($list_name as $name=>$type){
            $list = [];
            if (Yii::$app->params["web"][$name]){
                foreach (explode('-',Yii::$app->params["web"][$name] )as $key=>$value) {
                    $arr = [];
                    foreach (explode(',',$value) as $item) {
                        if ($type=='images'){
                            $arr[] = Images::findOne($item);
                        }else{
                            $arr[] = Article::findOne($item);
                        }
                    }
                    $list[] = $arr;
                }
            }
            Yii::$app->params[$name] = $list;
        }

        //首页新闻
        $cid = [35, 37, 36, 38];//公司新闻  行业资讯  电池专题  电池知识
        foreach ($cid as $id) {
            Yii::$app->params['index-news'][] = Article::find()->where(['category_id'=>$id])->andWhere(['status'=>1])->select(['id','title','description','create_time','content'])->orderBy('id desc')->limit('3')->all();
        }






        return $this->render('/index/index',['data'=>$this->data]);
    }

}
