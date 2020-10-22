<?php



namespace frontend\controllers;

use common\helpers\Visitors;
use common\models\Article;
use yii\web\Controller;

use yii;

class AboutController extends CommonController

{

      public function init(){
        parent::init();
        $this->enableCsrfValidation = false;

    }
    /**

     * @var string

     */

//    public $layout = 'main';
//    public function behaviors()
//    {
//
//        return [
//            [
//                'class' => 'yii\filters\PageCache',
//                'only' => ['index'],
//                'duration' => 3600,
//                'variations' => [
//                    Yii::$app->language,
//                ],
//
//            ],
//
//        ];
//    }

    public function actionIndex()

    {
//        (new Visitors())->index();//用户访问统计和限制
       if(!empty( Yii::$app->request->get('name'))){
          $status = false;
          $name=Yii::$app->request->get('name');
          $mail=Yii::$app->request->get('email');
          $content=Yii::$app->request->get('message');
           $arr = explode(',', Yii::$app->params['web']['email-rule']);
           foreach ($arr as $item) {
               if (!empty($item)){
                   if (strstr($name,$item) || strstr($mail,$item) || strstr($content,$item)) {
                       $status = true;
                   }
               }
           }
           if (empty($mail)) $status = true;//如果邮箱为空，就不发送
           if (!$status){//如果有这些特殊的词出现，就不发邮件
               $res = Yii::$app->mailer->compose('test', ['name'=>$name,'mail'=>$mail,'content'=>$content,'title' => 'juda.cn信息反馈','html' => 'text'])
                   ->setTo('market@juda.cn')
                   ->setSubject('Message subject')
                   ->send();
           }
//           var_dump($res); //true
       }
        parent::common();
//        Yii::$app->params['news_nav_tuijian'] = [
//            0 => ['title'=>'公司新闻','url'=>'/news/gongsixinwen.html'],
//            1 => ['title'=>'最新资讯','url'=>'/news/'],
//        ];
//        Yii::$app->params['companyAtricle'] = Article::find()->where(['category_id'=>35])->andWhere(['status'=>1])->andWhere(['like','np','h'])->limit(3)->all();
        return $this->render('/about/index',['data'=>$this->data]);

    }
  	
  	public function actionTest(){
    	
      if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            $data = [
              	'name' => $post['name'],
              	'mail' => $post['mail'],
                'phone' => $post['phone'],
                'dianya' => $post['dianya'],
                'rongliang' => $post['rongliang'],
              	'chicun' => $post['chicun'],
              	'message' => $post['message'],
               
            ];
            //var_dump($data);die;
        	$mail = Yii::$app->mailer;
        	$mail->messageConfig = [
              'charset'=>'UTF-8',
                'from'=>['liangkangning@juda.cn'=>'拓湃新能源邮件中心']
            ];
            
            if (true){
                echo 2;
                $res = $mail->compose('other', ['data'=>$data,'title' => 'www.topakpower.com邮件询盘','html' => 'text'])
                    ->setTo('B2B@topakpower.com')
                    ->setSubject('www.topakpower.com邮件询盘')
                    ->send();
            }else{
                echo '失败';
            }

        }else{
     		 echo 22;
      }
    }


    

}

