<?php



namespace frontend\controllers;



use common\helpers\ArrayHelper;
use common\helpers\StringHelper;
use common\models\Article;
use common\models\AttrImagesSelect;
use common\models\CategoryImages;
use common\models\Images;
use common\models\Keywords;
use yii\web\Controller;

use yii;

class KeywordsController extends CommonController

{

    /**

     * @var string

     */

    public $layout = 'main';



    public function actionIndex()
    {

        parent::common();
        $keyword_list=Keywords::find()->where(['>=','num',1])->all();
        $tuijian=Images::find()->where(['like','np','n'])->limit(4)->all();
//        var_dump($tuijian);
        Yii::$app->params['keyword_list']=$keyword_list;
        Yii::$app->params['tuijian']=$tuijian;
        $this->view->params['meta_title'] = '电池分类关键词列表，钜大锂电-'.Yii::$app->params['year'].'年专注锂电池定制';

        $this->view->params['keywords'] = '';

        $this->view->params['description'] = '电池分类关键字列表，钜大锂电，按需定制军用锂电池,低温锂电池,动力/储能锂电池,18650锂电池方案和产品,国家高新技术企业,军工,机器人,AGV,勘探测绘,医疗锂电池生产厂家.';
        return $this->render('index',['data'=>$this->data]);

    }

    public function actionItem()
    {

        parent::common();
        $order=0;
        if(Yii::$app->request->isGet){
            $id=Yii::$app->request->get('id');
            $keyw=Keywords::find()->where(['name'=>$id])->one();
            if (!$keyw){
                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
            }
            $keywods=explode('-',$keyw->keywords);
            $product_list_id=ArrayHelper::getColumn(Images::find()->where(['like','title',$keywods])->andWhere(['status'=>1])->asArray()->all(),'id');//根据关键词获取产品ID
//            根据属性获取对于的产品
            $array=array();
            foreach (ArrayHelper::string2array($keyw['attr_value_id']) as $key=>$value){
                $next_array=explode("|",$value);
                if (count($next_array)>1){
                    $query=AttrImagesSelect::find();
                    foreach ($next_array as $k=>$v){
                        $query=$query->orWhere(['attr_value_id'=>$v]);
                    }
                    $arrayItem=ArrayHelper::getColumn($query->groupBy('images_id')->asArray()->all(),'images_id');

                }else{
                    $arrayItem=ArrayHelper::getColumn(AttrImagesSelect::find()->where(['attr_value_id'=>$value])->asArray()->all(),'images_id');//选择的属性对于的商品

                }
                if ($key>=1){
                    $array=array_merge($array,$arrayItem);
                    $array = ArrayHelper::FetchRepeatMemberInArray ($array);
                }else{
                    $array=array_merge($array,$arrayItem);
                }
            }
//            var_dump($array);


            //判断是否选择分类
            if (!empty($keyw->category_id)){
                $query=CategoryImages::find();
                foreach (ArrayHelper::string2array($keyw->category_id) as $kk=>$vv){
                    $query->orWhere(['category_id'=>$vv]);
                }
               $product_category_list=ArrayHelper::getColumn( $query->groupBy('images_id')->asArray()->all(),'images_id');

               if(count($array)>0){
                   $array=ArrayHelper::FetchRepeatMemberInArray(array_merge($array,$product_category_list));
               }else{
                   $array=ArrayHelper::FetchNotRepeatMemberInArray(array_merge($array,$product_category_list));
               }


            }
//            获取所有产品的id
            $array_id_s=ArrayHelper::FetchNotRepeatMemberInArray(array_merge($product_list_id,$array));
            if (count($array_id_s)==0){
                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
            }
//            $product_list=Images::find()
//                ->where(['id'=>$array_id_s])
//                ->orderBy([new \yii\db\Expression('FIELD (id, ' . ArrayHelper::array2string($array_id_s,',') . ')')]);
            $product_list=Images::find()
                ->where(['id'=>$array_id_s])
                ->andWhere(['status'=>1])
                ->orderBy(['create_time'=>SORT_DESC]);

            $title =   $keyw['title'].'【钜大锂电】' ;
            $keywords = $keyw['keyword'].','.$keyw['longword1'].','.$keyw['longword2'];
            $description = '钜大锂电,' . Yii::$app->params['year'] . '年'.$keyw['keyword'].'生产厂家,按需定制'.$keyw['keyword'].'方案,价格,品牌.「60余研发团队,3000成功案例」东莞'.$keyw['keyword'].'厂家,国家高新技术,军工资质企业,锂电池热线:400-666-3615';

            $this->view->params['meta_title'] = $title;

            $this->view->params['keywords'] = $keywords;

            $this->view->params['description'] = $description;
            Yii::$app->params['keyw']=$keyw;
//            Yii::$app->params['urlad']=$keyw->getImageUrl();

//          获取相关案例

            $search=StringHelper::filterKeyword($keyw['keyword']);
//            查询符合的id
            $case_key=Article::find()->where(['category_id'=>[29,30,31,32]])->andWhere(['like','title',$search])->select('id')->limit(3)->asArray()->all();
            $case_key_id=ArrayHelper::getColumn($case_key,'id');
            $num=3-count($case_key_id);
            $rand_id=ArrayHelper::getColumn(Article::find()->where(['category_id'=>[29,30,31,32]])->andWhere(['not in','id',$case_key_id])->orderBy('Rand()')->limit($num)->all(),'id');
            $case_all_id=array_merge($case_key_id,$rand_id);
            //根据id的顺序查找到数据
        Yii::$app->params['case']=Article::find()
            ->where(['id'=>$case_all_id,'status'=>1])
            ->orderBy([new \yii\db\Expression('FIELD (id, ' . ArrayHelper::array2string($case_all_id,',') . ')')])
            ->all();

        Yii::$app->params['lanmu']=$keyw;
        Yii::$app->params['product_list']=$product_list;
//        相关新闻
            $query=Article::find();
            foreach ($keywods as $k){
                $query= $query->orWhere(['like','title',$k]);
            }

        Yii::$app->params['xiangguan_news']=$query->andWhere(['category_id'=>[36,37,38]])->limit(4)->all();
            $query=Article::find();
            foreach ($keywods as $k){
                $query= $query->orWhere(['like','content',$k]);
            }

            Yii::$app->params['xiangguan_news_tuozhan']=$query->andWhere(['category_id'=>[36,37,38]])->limit(4)->all();


        Yii::$app->params['new_news']=Article::find()->where(['category_id'=>[36,37,38]])->andWhere(['status'=>1])->orderBy(['id'=>SORT_DESC])->limit(10)->all();
        $keywords_category=Keywords::find()->orderBy(['sort'=>SORT_ASC])->limit(36)->asArray()->all();
//        var_dump($keywords_category);
        Yii::$app->params['keywords_category']=$keywords_category;
        $this->view->params['order'] =$order;
        return $this->render('item',['data'=>$this->data]);
        }

    }

}

