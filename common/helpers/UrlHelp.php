<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\helpers;

/**
 * ArrayHelper provides additional array functionality that you can use in your
 * application.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UrlHelp
{
    public static function GetNeswUrl($id){
        return '/news/detail?id='.$id;

    }
    public static function GetProductUrl($id){
        return '/product/detail?id='.$id;

    }
    public static function ProductAttr($chooseId,$id){
        $str='';
        if (empty($chooseId)){
            $str=$id;
        }else{
            $arry=explode("-",$chooseId);
            array_push($arry,$id);
            sort($arry);
            $str=implode($arry,"-");

        }
        return $str.".html";


    }
    //产品选择的属性，去除选择
    public static function ProductChooseAttr($action,$chooseIdArray,$key,$orderBy){
        $str='';
        if (count($chooseIdArray)==1){
            $str='/'.$action.'/';
            if ($orderBy>0){
                $str='/'.$action.'/list-'.'o'.$orderBy;
                $str=$str.".html";
            }
        }

        if(count($chooseIdArray)>1)
        {
            $list= ArrayHelper::array2string(ArrayHelper::removeItem($chooseIdArray,$key),'-');

            $str='/'.$action.'/list-'.$list;
            if ($orderBy>0){
                $str=$str.'-o'.$orderBy;
            }
            $str=$str.".html";

        }
        return $str;

    }
    public static function ProductOrderBy($action,$chooseIdArray,$orderBy,$list){
        $str='';
        $att=ArrayHelper::array2string($chooseIdArray,'-');

        if (in_array(0,$list)){
            $str='/'.$action.'/';
        }
        if (in_array(1,$list)){
            if ($orderBy==1){
                if(count($chooseIdArray)>0){
                    $str='/'.$action.'/list-'.$att;
                    $str=$str.'-o2';
                }else{
                    $str='/'.$action.'/list-o2';
                }

            }
            else{
                if(count($chooseIdArray)>0){
                    $str='/'.$action.'/list-'.$att;
                    $str=$str.'-o1';
                }else{
                    $str='/'.$action.'/list-o1';
                }

            }
            $str=$str.".html";
        }
        if (in_array(3,$list)){
            if ($orderBy==3){
                if(count($chooseIdArray)>0){
                    $str='/'.$action.'/list-'.$att;
                    $str=$str.'-o4';
                }else{
                    $str='/'.$action.'/list-o4';
                }

            }
            else{
                if(count($chooseIdArray)>0){
                    $str='/'.$action.'/list-'.$att;
                    $str=$str.'-o3';
                }else{
                    $str='/'.$action.'/list-o3';
                }

            }
            $str=$str.".html";
        }
        if (in_array(5,$list)){
            if(count($chooseIdArray)>0){
                $str='/'.$action.'/list-'.$att;
                $str=$str.'-o5';
            }else{
                $str='/'.$action.'/list-o5';
            }

            $str=$str.".html";
        }

        return $str;

    }



}
