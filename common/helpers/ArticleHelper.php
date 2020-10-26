<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace common\helpers;
use common\models\Article;
use common\models\ProhibitedWords;
use yii;
/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ArticleHelper
{
    public static function GetListRand($id,$num){//随机调取新闻某栏目的新闻
        $array=array();
        if (isset($id)){
            $count =  Article::find()->where(['in','category_id',$id])->andWhere(['status'=>1])->count();
            $l = rand(0,$count-10);
//            $array=Yii::$app->db->createCommand("SELECT id,title,description FROM yii2_article where status=1 and category_id in (".$id.") ORDER BY RAND() LIMIT ".$num)->queryAll();;
            $array=Article::find()->select('id,title,description')->where(['in','category_id',$id])->andWhere(['status'=>1])->limit($num)->offset($l)->all();

        }
        return $array;
    }

    //违禁词查询  针对文章列表
    public static function prohibitedWords($id=false,$data=false){
        $words = ProhibitedWords::find()->asArray()->all();
        $article = $data?:Article::find()->where(['id'=>$id])->one();
        $list = [];
        foreach ($words as $word) {
            //echo $word['name'];
            $article['title'] = $article['title']?:"--";
            $article['description'] = $article['description']?:"--";
            if (!empty($word['name'])){
                if (strstr($article['title'],$word['name']) || strstr($article['description'],$word['name']) || strstr($article['content'],$word['name'])){
                    $list[] = $word['name'];
                }
            }

        }
        return $list;
    }

    //更新文章的违禁词状态
    public static function updateArticleProhibitedWords($id =false){
        //如果传一个id的时候，就是更新该文章的状态
        if ($id){
            $res = ArticleHelper::prohibitedWords($id);
            //$article = Article::find()->where(['id' => $id])->one();
            $prohibite_words_status = "";
            $prohibite_words = "";
            if ($res){
                $prohibite_words_status = 1;
                $prohibite_words = implode(',', $res);
            }else{
                $prohibite_words_status = -1;
                $prohibite_words = '';
            }
            $command = Yii::$app->db->createCommand('UPDATE yii2_article SET prohibite_words_status='.$prohibite_words_status.', prohibite_words = "'.  $prohibite_words.'" WHERE id='.$id);
            $command->execute();

        }else{
            $list = Article::find()->where(['prohibite_words_status'=>0])->limit(200)->select("id")->all();
            foreach ($list as $item) {
                $res = ArticleHelper::prohibitedWords($item['id']);
                $prohibite_words = $res ?implode(',', $res): null;
                if ($res){

                    $command = Yii::$app->db->createCommand('UPDATE yii2_article SET prohibite_words_status=1, prohibite_words = "'.  $prohibite_words.'" WHERE id='.$item['id']);
                    $command->execute();

                }else{
                    $command = Yii::$app->db->createCommand('UPDATE yii2_article SET prohibite_words_status=-1 WHERE id='.$item['id']);
                    $command->execute();
                }

                dump($item['id']);
                echo "<br>";

            }
        }


    }
}
