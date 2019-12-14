<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace common\helpers;
use common\models\Picture;
use yii;
/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ProductHelper
{
    public static function GetListRand($num){
           $list=array();
            $array=Yii::$app->db->createCommand("SELECT id,title,description,cover FROM yii2_images  ORDER BY RAND() LIMIT ".$num)->queryAll();
            foreach ($array as $key=>$value){
                $url=Picture::find(['path'])->where(['id'=>$value['cover']])->asArray()->one();
                $value['imageUrl']= Yii::getAlias('@imagesUrl').'/'.$url['path'];
                $value['url']='/product/'.$value['id'].'.html';
                $list[]=$value;
            }
//             $sql="SELECT id,title,description FROM yii2_article where category_id in (".$id.") ORDER BY RAND() LIMIT ".$num;

        return $list;
    }
}
