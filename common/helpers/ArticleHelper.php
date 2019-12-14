<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace common\helpers;
use common\models\Article;
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
}