<?phpnamespace frontend\controllers;use yii\web\Controller;use yii;class MakeController extends CommonController{    /**     * @var string     */    public $layout = 'main';//    public function behaviors()//    {//        return [//            [//                'class' => 'yii\filters\PageCache',//                'duration' => 24*60*60,//                'variations' => [//                    \Yii::$app->language,//                ],////            ],//        ];////    }    public function actionIndex()    {//        $redis = Yii::$app->redis;//        $redis->del(test);//        $test=$redis->get('test');//        if (empty($test)){//            echo 'kong';//            $redis->set('test','name');//        }else{//            echo $redis->get('test');//        }        parent::common();        return $this->render('index',['data'=>$this->data]);    }    }