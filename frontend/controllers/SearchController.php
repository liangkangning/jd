<?php
namespace frontend\controllers;
use common\helpers\ArrayHelper;
use common\models\Article;
use common\models\Category;
use common\models\Images;
use common\models\ImagesElasticsearch;
use common\models\Keywords;
use yii\caching\DummyCache;
use yii\web\Controller;
use Yii;
class SearchController extends CommonController
{
    public function actionIndex()
    {
        parent::common();
        $keywords_category=Keywords::find()->orderBy(['sort'=>SORT_ASC])->limit(28)->asArray()->all();

        Yii::$app->params['keywords_category']=$keywords_category;
        $search= htmlspecialchars(Yii::$app->request->get('keyword')) ;

//        $highlight=[
//            "pre_tags"=>["<span>"],
//            "post_tags"=>["</span>"],
//            "fields"=>[
//                "title"=>new \stdClass(),
//                "content"=>new  \stdClass()
//            ]
//        ];
//        $res=ImagesElasticsearch::find()->query([
//            "multi_match"=>[
//                "query"=>$search,
//                "fields"=>["title","description"]
//            ],
//        ])->highlight($highlight)->limit(1000)->all();
//
//        $products=[];
//        $ids=[];
////        if ($search=='power'){
//        foreach ($res as $result){
////               $product=Images::findOne($result->id);
////               $product->title=!empty($result->highlight['title'][0])?$result->highlight['title'][0]:$result->title;
////               $product->description=!empty($result->highlight['description'][0])?$result->highlight['description'][0]:$result->description;
//            $products[$result->id]['title']=$result->highlight['title'][0];
//            $products[$result->id]['description']=$result->highlight['description'][0];
//            $ids[]=$result->id;
//        }
//            var_dump($res);
//            exit();
//        }
//        $ids = Images::find()->where(['like','title',$search])->select();
//
//        $ids_string=ArrayHelper::array2string($ids,',')?:0;
////        $product_list=Images::find()->where(['id'=>$ids])->orderBy(["FIELD(`id`,$ids_string)"=>true])?:[];
//        $product_list=Images::find()->where(['like','title',$search])->orderBy(["FIELD(`id`,$ids_string)"=>true])?:[];
//        $productProvider= new \yii\data\ActiveDataProvider([
//            'query' => $product_list,
//            'pagination'=>[
//                'pageSize'=>24,
//                'pageSizeParam' => false,
//            ],
//        ]);
//
//        Yii::$app->params['products']=$products;
//        Yii::$app->params['productProvider']=$productProvider;
//        $this->view->params['count']=count($res);
//        $this->view->params['keyword']= Yii::$app->request->get('keyword');
//        $this->view->params['product_list']=$product_list;
//
//        $title=$search.' 生产厂家 | 钜大锂电';
//        $this->view->params['meta_title']=$title;
//        return $this->render('index',['data'=>$this->data]);


        //旧的搜索代码
        if (empty($search)){
            $this->view->params['search']='';
        }else{
            $this->view->params['search']=$search;
        }
        $guolv=(['锂电池','电池']);
        foreach ($guolv as $key=>$value){
            $search=str_replace($value,'',$search);
        }
        $product_list=Images::find()
            ->Where(['or',['like', 'title', $search],['like', 'bianhao', $search]]);
        $count=Images::find()
            ->Where(['or',['like', 'title', $search],['like', 'bianhao', $search]])->select(['id'])->asArray()->all();
        $c=0;
        foreach ($count as $key=>$value){
            $c=$key+1;
        }

//        var_dump($product_list);
        //        1.根据编号搜索
        $title = $search . $this->view->params['meta_title'];
        $this->view->params['meta_title'] = $title;
        Yii::$app->params['count']=$c;
        $this->view->params['keyword']= Yii::$app->request->get('keyword');



        $type = Yii::$app->request->get('type') ?: "product";
        if ($type=="product"){
            Yii::$app->params['product_list']=new \yii\data\ActiveDataProvider([
                'query' => $product_list,
                'pagination'=>[
                    'pageSize'=>16,
                    'pageSizeParam' => false,
                ],
            ]);
        }elseif ($type=="news"){
            $ids = Category::find()->where(['pid' => 34])->column();
            Yii::$app->params['news_list'] = new \yii\data\ActiveDataProvider([
                'query' => Article::find()->where(['like', 'title', $search])->andWhere(['in','category_id',$ids]),
                'pagination'=>[
                    'pageSize'=>16,
                    'pageSizeParam' => false,
                ],
            ]);
            Yii::$app->params['count'] = Article::find()->where(['like', 'title', $search])->andWhere(['in', 'category_id', $ids])->count();
            /**
             * 如果没有搜索到内容的话，就显示点击量最高的8个产品
             */
            if (Yii::$app->params['count']==0){
                Yii::$app->params['news_list'] = new \yii\data\ActiveDataProvider([
                    'query' => Article::find()->orderBy("click desc")->limit(12),
                    'pagination' => false,
                ]);

            }
        }elseif ($type=="case"){
            $ids = Category::find()->where(['pid' => 28])->column();
            array_push($ids, "28");
            $query = Article::find()->where(['like', 'title', $search])->andWhere(['in', 'category_id', $ids]);
            Yii::$app->params['case_list'] = new \yii\data\ActiveDataProvider([
                'query' => $query,
                'pagination'=>[
                    'pageSize'=>12,
                    'pageSizeParam' => false,
                ],
            ]);

            Yii::$app->params['count'] = $query->count();
        }

        /**
         * 如果没有搜索到内容的话，就显示点击量最高的8个产品
         */
        if (Yii::$app->params['count']==0 && $type=="product"){
            Yii::$app->params['product_list'] = new \yii\data\ActiveDataProvider([
                'query' => Images::find()->orderBy("sort desc")->limit(4),
                'pagination' => false,
            ]);

        }




        return $this->render('index',['data'=>$this->data]);
    }


}
