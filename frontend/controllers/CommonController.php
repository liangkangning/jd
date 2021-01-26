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
    public $cache_time = 600;//缓存时间
    public $nav_tree=array('index','special','case','gongsixinwen','dianchizhunati','hangyezixun','zhishi','diwen','detail','kuanwen','taisuanli','fanbao','diwen18650','diwenlipo','tz26650','fangbaocell','charger','bzpower',
        'libattery','juhewu','chuneng','lilizi','ironicphosphate','dongli','tezhong','junjing','robots','yiliao','gongye','yingji','shangyong','xiaofei','zhineng','industrial','zhuanti','changjianwenti','lifepo4','tzcell','tzpower');//判断是否现实树形的分类

    public function init(){
//          初始化后台的数据
        Yii::$app->params['nav_tree_block'] = false;
        $controllerName = $this->id;//获取类名
        Yii::$app->params['className'] = $controllerName;
        if (ArrayHelper::isIn($controllerName,$this->nav_tree)){
            Yii::$app->params['nav_tree_block']=true;//判断是否现实树形的分类
        }
        Yii::$app->params['is_index'] = $this->id=='index'?true:false;

        $config = $this->getCache('config') ?: $this->setCache('config',Config::find()->asArray()->all());
        foreach ($config as $key=>$value){
            Yii::$app->params['web'][$value['name']]=$value['value'];

        }

        Yii::$app->params['yanfa_team'] = $this->getCache('yanfa_team') ?: $this->setCache('yanfa_team',Article::find()->where(['category_id' => 39])->orderBy('sort asc')->all());
//        Yii::$app->params['yanfa_team'] = Article::find()->where(['category_id' => 39])->orderBy('sort asc')->all();


        Yii::$app->params['shiyanshi_list'] = [
            [
                'imageUrl' => '/assets/images/index_shiyanshi_1.jpg',
                'title' => '理化实验室',
                'content' => '<p>评估电源系统中各类材料的<br>理化性质和元素含量。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_2.jpg',
                'title' => '电性能实验室',
                'content' => '<p>评估电池在不同环境温度、<br>不同倍率电流下的充放电性能。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_3.jpg',
                'title' => '电子结构实验室',
                'content' => '<p>评估检测电子器件的<br>各项电气特性和物理特性<br>测试电子产品的<br>机械使用性能及使用环境要求。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_4.jpg',
                'title' => '安全测试实验室',
                'content' => '<p>测试评估电池在极端滥用、<br>破坏等条件下的安全性。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_5.jpg',
                'title' => '环境仿真实验室',
                'content' => '<p>模拟电池、电池组工作的实际环境和工况，<br>评估其可靠性和安全性。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_6.jpg',
                'title' => '光伏储能实验室',
                'content' => '<p>负责储能电池的充放电控制与<br>监控系统的开发与测试。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_7.jpg',
                'title' => '光伏电能变换实验室',
                'content' => '<p>负责研发测试光伏并网、离网、离并网多功能逆变器，<br>便携式光伏电源等产品的研究与开发。</p>',
            ],
            [
                'imageUrl' => '/assets/images/index_shiyanshi_8.jpg',
                'title' => '光伏云监控实验室',
                'content' => '<p>负责光伏储能分布式发电系统的研发，<br>建立光伏发电云监控系统研发与测试平台。</p>',
            ],
        ];
        foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value) {
            Yii::$app->params['shiyanshi_list'][$key]['text'] = str_replace('<br>','',$value['content']);
        }

        Yii::$app->params['news_nav_tuijian'] = [
            0 => ['title'=>'相关资讯','url'=>'/news/'],
            1 => ['title'=>'最新资讯','url'=>'/news/'],
        ];





    }

    public function common(){
        $firewall =  Yii::$app->params['web']['firewall'];
        if ($firewall=='open'){
            //超过5个属性的就直接跳到404,非常时期才使用
            $shuxing = explode("-", Yii::$app->request->url);
            if (count($shuxing)>=6){
                ob_start();
                //返回503状态码
                header('HTTP/1.1 503 Service Temporarily Unavailable');
                header('Status: 503 Service Temporarily Unavailable');
                exit;
            }
        }
//        \Yii::$app->db->schema->refresh();
//        (new Visitors())->index();//用户访问统计和限制
        //钜大至今的年份
        $year=date('Y',time())-'2002';
        Yii::$app->params['year']=$year;

        $action= Yii::$app->controller->action->id;//获取方法名

        $controllerName=$this->id;//获取类名

        $this->controllerName=$controllerName;

        $this->controllerName=$controllerName;
        Yii::$app->params['controllerName']=$controllerName;

//        echo '----1--';

        Yii::$app->params['breadcrumbs'][]=Html::tag('a',"首页",['href'=>Yii::$app->homeUrl]);//面包屑



        $self_lanmu = $this->getCache('self_lanmu'.$controllerName) ?: $this->setCache('self_lanmu'.$controllerName,Category::find()->where(['name'=>$controllerName])->one());
//        $self_lanmu = Category::find()->where(['name'=>$controllerName])->one();

        if ($self_lanmu['pid']!=0){//如果不是真正的父栏目，因为为了优化URL，二级栏目当一级栏目的方式写
            $top_lanm = $this->getCache('top_lanm'.$self_lanmu['pid']) ?: $this->setCache('top_lanm'.$self_lanmu['pid'],Category::find()->where(['id'=>$self_lanmu['pid']])->one());

//            echo '----2--';
            Yii::$app->params['top_lanmu'] = $top_lanm;
            Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$top_lanm['title'],['href'=>'/'.$top_lanm['name']]);

        }

//        echo '----3--';

        Yii::$app->params['breadcrumbs'][]='>'.Html::tag('a',$self_lanmu['title'],['href'=>'/'.$controllerName.'/']);



        if ($action!='index'){

            if ($action!='detail'){

                $this->lanmu=Category::find()->where(['name'=>$action])->one();

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


        if ($controllerName=='index'){

            $title=Yii::$app->params['web']['WEB_SITE_TITLE'];

            $keywords=Yii::$app->params['web']['WEB_SITE_KEYWORD'];

            $description=Yii::$app->params['web']['WEB_SITE_DESCRIPTION'];

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


        //点击最高的资讯
        $data=Yii::$app->cache->get('randAtricle');
        if ($data === false){
            $randAtricle = Article::find()->where(['status'=>1])->limit(12)->orderBy('RAND()')->where(['>','category_id',0])->andWhere(['>','click',5000])->all();
            Yii::$app->cache->set('randAtricle',$randAtricle,30*60);
        }else{
            $randAtricle=$data;
        }
        $this->view->params['randAtricle']=$randAtricle;

        //最新资讯
        $ids = Category::find()->where(['pid' => 34])->orderBy('sort asc')->andWhere(['not in','id',['35']])->column();//除了公司新闻
        Yii::$app->params['new_news'] = $this->getCache('new_news') ?: $this->setCache('new_news',Article::find()->where(['in','category_id',$ids])->andWhere(['status'=>1])->limit(12)->orderBy('id desc')->all());
//        Yii::$app->params['new_news'] = Article::find()->where(['status'=>1])->limit(12)->orderBy('id desc')->where(['>','category_id',0])->all();



//        var_dump($randAtricle);



        return true;



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

            ->where(["or",
                    ['id'=>$products_id_array],
                    ['category_id2'=>$id]
                ]
            )

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

    public function getCache($value){
        return Yii::$app->cache->get($value);
    }

    public function setCache($key,$value){
        Yii::$app->cache->set($key, $value, $this->cache_time);
        return $value;
    }

    public function isAllowedIp($ips){
        $visitIP = (new Visitors())->GetIps();
        if ($ips!=null){
            if (strlen($ips)>0){
                $ipList = explode(',', $ips);
                foreach ($ipList as $ip) {
                    if (strlen($ip)>0){
                        if (strstr($visitIP,$ip)){
                            return true;
                        }
                    }
                }
            }
        }
        return false;
    }


}

