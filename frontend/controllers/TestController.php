<?php
namespace frontend\controllers;
use common\helpers\ArrayHelper;
use common\helpers\ArticleHelper;
use common\helpers\StringHelper;
use common\models\Article;
use common\models\ArticleFrom;
use common\models\AttrImages;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Config;
use common\models\Images;
use common\models\Admin;
use common\models\Visitors;
use common\models\VisitorsBlacklist;
use yii\web\Controller;
use yii;
use yii\log\Logger;
class TestController extends CommonController
{
    /**
     * @var string
     */
    public $layout = 'main';
    public function actionIndex()
    {
       $data=Yii::$app->cache->get('tuisong');
       if ($data === false){
           $data=true;
           Yii::$app->cache->set('tuisong',$data,23*3600);
           $urls = array();
           $start = date('Y-m-d 00:00:00',strtotime("-1 day"));
           $end = date('Y-m-d 23:59:00',strtotime("-1 day"));
           $array=Yii::$app->db->createCommand("SELECT id FROM yii2_article WHERE `create_time` >= unix_timestamp( '$start' ) AND `create_time` <= unix_timestamp( '$end' ) and status=1  ")->queryAll();
           foreach ($array as $key=>$value){
               $urls[]="http://m.juda.cn/news/mip/".$value['id'].".html";
           }
//           熊掌号
           $api = 'http://data.zz.baidu.com/urls?appid=1598968113743665&token=J4RTmchW7xPUHcBr&type=batch';
           $ch = curl_init();
           $options =  array(
               CURLOPT_URL => $api,
               CURLOPT_POST => true,
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_POSTFIELDS => implode("\n", $urls),
               CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
           );
           curl_setopt_array($ch, $options);
           $result = curl_exec($ch);
           $results=$result;
           echo $result;
           Yii::$app->cache->set('tuisong_result',$result,24*3600);
       }
        throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
    }
    public function actionDangtian(){
        $data=Yii::$app->cache->get('tuisong_dangtian');
        if ($data === false) {
            $data = true;
            Yii::$app->cache->set('tuisong_dangtian', $data, 23 * 3600);
            $urls = array();
            $urls_new = array();
            $urls_pc=array();
            $start = date('Y-m-d 00:00:00');
            $end = date('Y-m-d 23:59:00');
            $array = Yii::$app->db->createCommand("SELECT id FROM yii2_article WHERE `create_time` >= unix_timestamp( '$start' ) AND `create_time` <= unix_timestamp( '$end' ) and status=1  ")->queryAll();
            foreach ($array as $key => $value) {
                $urls[] = "http://m.juda.cn/news/mip/" . $value['id'] . ".html";
                $urls_new[] = "http://m.juda.cn/news/" . $value['id'] . ".html";
                $urls_pc[]="http://www.juda.cn/news/" . $value['id'] . ".html";
            }
//           pc端当天推送
            $api = 'http://data.zz.baidu.com/urls?site=www.juda.cn&token=84iTfEE4XLM5kfm5';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls_pc),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
//           站长mip推送
            $api = 'http://data.zz.baidu.com/urls?site=m.juda.cn&token=84iTfEE4XLM5kfm5&type=mip';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            Yii::$app->cache->set('tuisong_dangtian_mip_result',$result);
//           站长非mip推送
            $api = 'http://data.zz.baidu.com/urls?site=m.juda.cn&token=84iTfEE4XLM5kfm5';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $urls_new),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            Yii::$app->cache->set('tuisong_dangtian_result',$result);
        }
        throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        }
        public function actionSysEdit(){
           $data = $this->actionSysCheck(true);
           $edit_num = count($data['edit']);
           //1.时间段
            $h = date('H',time());
            $start = 8;
            $end = 18;
            $ga = date("w");
            if ($ga==0) $ga=7;
            $ga--;//星期几
//           当天最多发布的数量
            $long = $data['time'][$ga];
            $hArr = [10,11,14,15,16,17];
            //执行次数
            $num = ceil($long/count($hArr));
//            $num = 1;
            if (in_array($h,$hArr)){
//                2.获取文章列表
                $thiDay =  strtotime(date('Y-m-d',time()));
                $count = ArticleFrom::find()->where(['status'=>3])->andWhere(['>','utime',$thiDay])->count();

                if ($count<=$long){
                    for ($i=0; $i <$num ; $i++) {
                        $res = ArticleFrom::find()->where(['status'=>2])->one();
                        $article = new Article();
                        $article->title = $res->title;
                        $article->description = $res->description;
                        $article->content = $res->content;
                        $article->keywords = $res->keywords;
                        $article->status = 1;
                        $article->from = $res->from;
                        $article->article_from_id = $res->id;
                        $article->conlin = 2;
                        $article->create_time = time()-rand(0,300);
                        $article->category_id = 38;//电池知识

                        $admin = Admin::find()->where(['username'=>$data['edit'][rand(0,$edit_num-1)]])->one();
                        $article->author_id = $admin->uid;
//                        echo $author_id;
                        //编辑员id
                        $result = $article->save();
                        var_dump( $result);echo $i.'<br>';
                        if ($result){//保存成功
                            $res->status = 3;
                            $res->utime = time();
                            $res->save();
                        }else{
                            $res->status = -1;
                            $res->utime = time();
                            $res->save();
                            $i--;//如果发布失败，还得继续，不增加递增参数
                        }
//                        var_dump( $res);
                    }
                }
            }
        }

        public function actionSysCheck($c = false){
            $web = Config::find()->where(['name' => 'WEB_EDIT'])->one();

            $edit = explode(',',$web['value']);

            $time = explode(',',$web['extra']);
            $data['edit'] = $edit;
            $data['time'] = $time;
            foreach ($edit as $key=>$value){
                 $res = Admin::find()->where(['username'=>$value])->one();
                 if (!$res){
                     echo $value.'该用户不存在';
                     return;
                 }
            }
            if (count($time)!=7){
                echo '时间必须设置7天';
                return;
            }
            if ($c){
                return $data;
            }else{
                print_r($edit);
                echo "<br>";
                print_r($time);

            }
        }

//        新增黑名单
        //根据访问多属性的页面，累计数量判断是否过多，目前是10分钟数据
        public function actionAddBlack(){

            $data = Yii::$app->db->createCommand('SELECT ip,system,browser,type,add_time,count(*) as times FROM yii2_visitors WHERE from_unixtime(add_time) >=DATE_SUB(NOW(),INTERVAL 60 MINUTE) and level>4 GROUP BY ip ORDER BY times DESC')
                ->queryAll();

            foreach ($data as $key=>$value) {
                if ($value['times']<15) break;
                if (!strstr($value['system'],"引擎") && !strstr($value['browser'],"蜘蛛")){
                    $ip = VisitorsBlacklist::find()->where(['ip' => $value['ip']])->one();
                    if (!$ip){
                        $black = new VisitorsBlacklist();
                        $black->ip = $value['ip'];
                        $black->save();
                        echo $key.'-----';
                    }
                }
            }
        }

        /**
         * 手动清除缓存
         */
        public function actionClearCache(){
            Yii::$app->cache->flush();
            echo '清理成功';
        }

        public function actionProhibitedWords(){

            $list = Article::find()->limit(100)->select("id")->all();
            foreach ($list as $item) {
                $res = ArticleHelper::prohibitedWords($item['id']);
                dump($res);
                echo "<br>";
            }

        }
}
?>
