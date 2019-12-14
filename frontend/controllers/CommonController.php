<?php



namespace frontend\controllers;


use common\helpers\Visitors;
use common\models\Article;

use common\models\Blog;

use common\models\CategoryImages;

use common\models\Config;
use common\models\Images;

use yii\web\Controller;

use common\models\Category;

use yii\helpers\ArrayHelper;

use yii;

use yii\helpers\Html;

class CommonController extends Controller

{

    public $data ;

    public $lanmu;

    public $controllerName;

    public $is_zhizhu=1;
    public $nav_tree=array('special','case','gongsixinwen','dianchizhunati','hangyezixun','zhishi','diwen','detail','kuanwen','taisuanli','fanbao','search','libattery','juhewu','blog'

    ,'chuneng','lilizi','ironicphosphate','dongli','tezhong','junjing','robots','yiliao','gongye','yingji','shangyong','xiaofei','zhineng','industrial','zhuanti','changjianwenti','lifepo4','about','make');//判断是否现实树形的分类

    public function common(){
//        \Yii::$app->db->schema->refresh();
//        (new Visitors())->index();//用户访问统计和限制
        //钜大至今的年份
        $year=date('Y',time())-'2002';
        Yii::$app->params['year']=$year;

        Yii::$app->params['nav_tree_block']=false;

        $action= Yii::$app->controller->action->id;//获取方法名

        $controllerName=Yii::$app->controller->id;//获取类名

        $this->controllerName=$controllerName;

        $this->controllerName=$controllerName;
        Yii::$app->params['controllerName']=$controllerName;

//        echo '----1--';

        Yii::$app->params['breadcrumbs'][]=Html::tag('a',"首页",['href'=>Yii::$app->homeUrl]);//面包屑



        $self_lanmu=Category::find()->where(['name'=>$controllerName])->asArray()->one();

        if ($self_lanmu['pid']!=0){//如果不是真正的父栏目，因为为了优化URL，二级栏目当一级栏目的方式写

            $top_lanm=Category::find()->where(['id'=>$self_lanmu['pid']])->asArray()->one();

//            echo '----2--';

            Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$top_lanm['title'],['href'=>'/'.$top_lanm['name']]);

        }

//        echo '----3--';

        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$self_lanmu['title'],['href'=>'/'.$controllerName.'/']);



        if ($action!='index'){

            if ($action!='detail'){

                $this->lanmu=Category::find()->where(['name'=>$action])->asArray()->one();

                Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$this->lanmu['title'],['href'=>'/'.$controllerName.'/'.$action.'.html']);

            }else{

                $id=Yii::$app->request->get('id');

                $article=Article::find()->select(['category_id'])->where(['id'=>$id])->andWhere(['status'=>1])->one();

                $this->lanmu=Category::find()->where(['id'=>$article['category_id']])->one();



                Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$this->lanmu['title'],['href'=>'/'.$controllerName.'/'. $this->lanmu['name'].'.html']);



            }

//            echo '----4--';



        }else{

            $this->lanmu=$self_lanmu;

        }

        $this->data['lanmu']=$this->lanmu;

         Yii::$app->params['lanmu']=$this->lanmu;

//        var_dump(Yii::$app->params['breadcrumbs']);







        if (ArrayHelper::isIn($action,$this->nav_tree)||ArrayHelper::isIn($controllerName,$this->nav_tree)){
            Yii::$app->params['nav_tree_block']=true;//判断是否现实树形的分类
        }
        if ($controllerName=='index'){

            $title=Yii::$app->params['web']['WEB_SITE_TITLE']->value;

            $keywords=Yii::$app->params['web']['WEB_SITE_KEYWORD']->value;

            $description=Yii::$app->params['web']['WEB_SITE_DESCRIPTION']->value;

        }elseif ($action=='detail'){

            $id=Yii::$app->request->get('id');

            if ($controllerName=='product'){

                $item=Images::find()

                    ->where(['id'=>$id])

                    ->one();

                $title=$item->title.'【钜大锂电】';

                $keywords=$item->keywords;

                $description=$item->description;



            }elseif ($controllerName=='news'){

                $item=Article::find()

                    ->where(['id'=>$id])

                    ->andWhere(['status'=>1])

                    ->one();

                $title=$item->title.'【钜大锂电】';

                $keywords=$item->keywords;

                $description=$item->description;



            }

            elseif ($controllerName=='blog'){

                $item=Blog::find()

                    ->where(['id'=>$id])

                    ->one();

                $title=$item->title.'【钜大锂电】';

                $keywords=$item->keywords;

                $description=$item->description;



            }



        }else{

            $title=$this->lanmu['meta_title'].'【钜大锂电】';

            $keywords=$this->lanmu['keywords'];

            $description=$this->lanmu['description'];







        }



         $this->view->params['meta_title']=$title;

         $this->view->params['keywords']=$keywords;

         $this->view->params['description']=$description;



//         随机调取相关文章

//        $randAtricle=Article::find()->where(['in','category_id',[36,37,38]])->andWhere(['status'=>1])->orderBy("rand()")->limit(11)->all();

//        $randAtricle=Yii::$app->db->createCommand("SELECT id,title,description,create_time FROM yii2_article where category_id in (36,37,38) ORDER BY RAND() LIMIT 11")->queryAll();;

        $data=Yii::$app->cache->get('randAtricle');
        if ($data === false){
            $randAtricle=Article::find()->limit(11)->orderBy('click desc')->where(['>','category_id',0])->all();
            Yii::$app->cache->set('randAtricle',$randAtricle,86400);
        }else{
            $randAtricle=$data;
        }


        $this->view->params['randAtricle']=$randAtricle;

//        var_dump($randAtricle);



        return true;



    }

	public function init(){
//          初始化后台的数据
        foreach (Config::find()->all() as $key=>$value){
            Yii::$app->params['web'][$value->name]=$value;
        }
	}



	public function get_lanmu($obj){



    }

    public function get_controller_name(){

        $shibie=str_replace('frontend\controllers\\','',$this::className());

        $shibie=strtolower(str_replace('Controller','',$shibie));

        return $shibie;



    }

    public  function  ca_image_list($id,$num,$order='create_time DESC',$where=[]){

        $pid=Category::find()->where(['id'=>$id])->select(['pid'])->one();

        if($pid->pid==0){

            $tezhong_list_id=Category::find()->where(['pid'=>$id])->select('id')->orderBy('sort ASC')->asArray()->all();

            $tezhong_list_id_array=ArrayHelper::getColumn($tezhong_list_id,'id');



        }else{

            $tezhong_list_id_array=$id;

        }

        $products_id=CategoryImages::find()->where(['category_id'=>$tezhong_list_id_array])->groupBy('images_id')->asArray()->all();

        $products_id_array=ArrayHelper::getColumn($products_id,'images_id');

        $product_list=Images::find()

            ->where(['id'=>$products_id_array])

            ->andWhere($where)

            ->orderBy($order)

            ->limit($num)

            ->all()

        ;



        return $product_list;

    }

    public  function  ca_lujin_image_list($id,$num,$order='create_time DESC'){

        $pid=Category::find()->where(['id'=>$id])->select(['pid'])->one();

        if($pid->pid==0){

            $tezhong_list_id=Category::find()->where(['pid'=>$id])->select('id')->orderBy('sort ASC')->asArray()->all();

            $tezhong_list_id_array=ArrayHelper::getColumn($tezhong_list_id,'id');



        }else{

            $tezhong_list_id_array=$id;

        }

        $product_list=Images::find()

            ->where(['in','category_id2',$tezhong_list_id_array])

            ->orderBy($order)

            ->limit($num)

            ->all();





        return $product_list;

    }

}

