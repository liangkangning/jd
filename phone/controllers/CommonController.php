<?php







namespace phone\controllers;







use common\models\Article;



use common\models\Blog;



use common\models\CategoryImages;



use common\models\Images;



use common\models\Urlad;

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



    public $nav_tree=array('special','case','gongsixinwen','dianchizhunati','hangyezixun','zhishi','diwen','detail','kuanwen','taisuanli','fanbao','search','libattery','juhewu','blog'



    ,'chuneng','lilizi','ironicphosphate','dongli','tezhong','junjing','robots','yiliao','gongye','yingji','shangyong','xiaofei','zhineng','industrial','zhuanti','changjianwenti','lifepo4');//判断是否现实树形的分类

    public function common(){
        //钜大至今的年份
        $year=date('Y',time())-'2002';
        Yii::$app->params['year']=$year;

        
        $url=Yii::$app->request->hostInfo.Yii::$app->request->url;
        $url=str_replace("/mip","",$url);
        $urlad=Urlad::find()->where(['url'=>$url])->one();
        Yii::$app->params['urlad']=$urlad;

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

            $title='【钜大锂电】锂电池定制厂家, 生产18650锂离子电池组,磷酸铁锂电池,动力/储能锂电池';

            $keywords='锂电池,锂离子电池, 锂动力电池,储能电池,18650锂电池,锂电池生产厂家,军用电池,低温电池,钜大,钜大锂电';

            $description='东莞市钜大电子有限公司,资深锂电池生产厂家,16年专注锂离子电池定制.供应锂动力电池,储能锂电池,18650锂电池组,磷酸铁锂电池,大容量锂电池,军用/低温锂电池.【钜大锂电-超安全•超可靠】,定制电话:400-666-3615. ';

        }elseif ($action=='detail'||$action=='mip'){

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

//        $randAtricle=Article::find()->where(['in','category_id',[36,37,38]])->andWhere(['status'=>1])->orderBy()->limit(11)->all();

//        $randAtricle=Yii::$app->db->createCommand("SELECT id,title,description,create_time FROM yii2_article where category_id in (36,37,38) ORDER BY RAND() LIMIT 11")->queryAll();;
        $randAtricle=Article::find()->limit(11)->all();

        $this->view->params['randAtricle']=$randAtricle;

//        var_dump($randAtricle);



        return true;



    }



	public function init(){




	}







	public function get_lanmu($obj){







    }



    public function get_controller_name(){



        $shibie=str_replace('phone\controllers\\','',$this::className());



        $shibie=strtolower(str_replace('Controller','',$shibie));



        return $shibie;







    }



    public  function  ca_image_list($id,$num,$order='id DESC',$where=[]){



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



    public  function  ca_lujin_image_list($id,$num,$order='id DESC'){



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



