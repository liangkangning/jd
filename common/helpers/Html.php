<?php

namespace common\helpers;

use common\models\Anchor;
use common\models\Keywords;
use Yii;

/**
 * Html provides a set of static methods for generating commonly used HTML tags.
 *
 * Nearly all of the methods in this class allow setting additional html attributes for the html
 * tags they generate. You can specify for example. 'class', 'style'  or 'id' for an html element
 * using the `$options` parameter. See the documentation of the [[tag()]] method for more details.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Html extends \yii\helpers\BaseHtml
{
    /**
     * ---------------------------------------
     * 生成 图片路径
     * @param string $url 图片相对路径，一般为“201605/1235654.jpg”
     * @param string $params 生成链接时的附加测试，例如长宽等
     * @param bool $isUrl 是否生成php文档形式的url
     * @return string
     * ---------------------------------------
     */
    public static function src($url,$params = '',$isUrl = false){
        if ($isUrl === false) {
            return Yii::$app->params['upload']['url'].$url;
        }
        $query = 'path='.$url;
        if ($params) {
            $query .= '&'.$params;
        }
        if (Yii::$app->params['storage_encrypt']) {
            $query = 'path='.base64_encode($query);

        }
        return Yii::getAlias('@storageUrl').'/index.php?'.$query;
    }

    /**
     * ---------------------------------------
     * 重写生成html input radio标签，为了适应metronic_v4.5.6主题，加了个<span></span>
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     * ---------------------------------------
     */
    public static function radio($name, $checked = false, $options = [])
    {
        $options['checked'] = (bool) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the radio button is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        } else {
            $hidden = '';
        }
        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);
            $content = static::label(static::input('radio', $name, $value, $options) . '<span></span> ' . $label, null, $labelOptions);
            return $hidden . $content;
        } else {
            return $hidden . static::input('radio', $name, $value, $options);
        }
    }

    /**
     * ---------------------------------------
     * 重写生成html input checkbox标签，为了适应metronic_v4.5.6主题，加了个<span></span>
     * @param string $name
     * @param bool $checked
     * @param array $options
     * @return string
     * ---------------------------------------
     */
    public static function checkbox($name, $checked = false, $options = [])
    {
        $options['checked'] = (bool) $checked;
        $value = array_key_exists('value', $options) ? $options['value'] : '1';
        if (isset($options['uncheck'])) {
            // add a hidden field so that if the checkbox is not selected, it still submits a value
            $hidden = static::hiddenInput($name, $options['uncheck']);
            unset($options['uncheck']);
        } else {
            $hidden = '';
        }
        if (isset($options['label'])) {
            $label = $options['label'];
            $labelOptions = isset($options['labelOptions']) ? $options['labelOptions'] : [];
            unset($options['label'], $options['labelOptions']);
            $content = static::label(static::input('checkbox', $name, $value, $options) . '<span></span> ' . $label, null, $labelOptions);
            return $hidden . $content;
        } else {
            return $hidden . static::input('checkbox', $name, $value, $options);
        }
    }

//    mip改造，对图片进行处理
   public static  function decode_mip($content){

      $text= str_replace('<img','<mip-img',$content);
       $text = preg_replace("/style=.+?['|\"]/i",'',$text);
      return self::decode($text);
   }

    public static function setAnchor($str,$status=0){

        $anchors = Anchor::find()->asArray()->orderBy("sort desc")->all();
        if ($status==1){
            $array=array();
            foreach (Keywords::find()->where(['>=','num',2])->asArray()->orderBy(['sort'=>SORT_DESC])->all() as $key=>$value){
                $v['id']=$value['id'];
                $v['name']=$value['keyword'];
                $v['url']='/keywords/'.$value['name'].'/';
                $array[]=$v;
            }
            $anchors=$array;
        }

        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s = $str;
        $i = 0;
        $list=array();
        $urls=array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {

            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//                error_log($anchor['name'].'---',3,'test.log');
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
            $str_new=self::tihuan($i,$anchor['name'],$str);
            if ($str_old != $str_new  && !in_array($anchor['url'],$urls)) {
                $array['id']=$anchor['id'];
                $array['url']=$anchor['url'];
                $array['i']=$i;
                $array['name']=$anchor['name'];
                $list[]=$array;
                array_push($anchor_ids, $anchor['id']);
                array_push($urls, $anchor['url']);
                $str = $str_new;
                $i++;

            }
            if ($i >= 4) {break;}//最多显示4个关键词
        }

        if ($i<=3){
            $str= $str_s;
            $list=array();
            $i=0;
            $anchor_ids=array();
            foreach ($anchors as $key=>$anchor) {
//                $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
//                $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
                $str_old = $str;
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
                $str_new=self::tihuan($i,$anchor['name'],$str);
                if ($str_old != $str_new) {
                    $array['id']=$anchor['id'];
                    $array['url']=$anchor['url'];
                    $array['i']=$i;
                    $array['name']=$anchor['name'];
                    $list[]=$array;
                    array_push($anchor_ids, $anchor['id']);
                    $str = $str_new;
                    $i++;
                }
                if ($i >= 4) {break;}//最多显示4个关键词
            }

        }
        $str=self::huanti($list,$str);

        //将img加上去
        foreach ($matches[0] as $alt_content) {
            preg_replace('/Its_Just_A_Mark/', $alt_content, $str, 1);
        }
//        var_dump($anchor_ids);
        return $str;

    }
    public static function getAnchor($str,$anchors){

        $anchors = $anchors;
        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s = $str;
        $i = 0;
        $list=array();
        $urls=array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {

            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//                error_log($anchor['name'].'---',3,'test.log');
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
            $str_new=self::tihuan($i,$anchor['name'],$str);
            if ($str_old != $str_new  && !in_array($anchor['url'],$urls)) {
                $array['id']=$anchor['id'];
                $array['url']=$anchor['url'];
                $array['i']=$i;
                $array['name']=$anchor['name'];
                $list[]=$array;
                array_push($anchor_ids, $anchor['id']);
                array_push($urls, $anchor['url']);
                $str = $str_new;
                $i++;

            }
            if ($i >= 4) {break;}//最多显示4个关键词
        }

        if ($i<=3){
            $str= $str_s;
            $list=array();
            $i=0;
            $anchor_ids=array();
            foreach ($anchors as $key=>$anchor) {
//                $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
//                $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
                $str_old = $str;
//                $str_new = preg_replace($rule, $href, $str, $anchor['num']);
                $str_new=self::tihuan($i,$anchor['name'],$str);
                if ($str_old != $str_new) {
                    $array['id']=$anchor['id'];
                    $array['url']=$anchor['url'];
                    $array['i']=$i;
                    $array['name']=$anchor['name'];
                    $list[]=$array;
                    array_push($anchor_ids, $anchor['id']);
                    $str = $str_new;
                    $i++;
                }
                if ($i >= 4) {break;}//最多显示4个关键词
            }

        }
        $str=self::huanti($list,$str);

        //将img加上去
        foreach ($matches[0] as $alt_content) {
            preg_replace('/Its_Just_A_Mark/', $alt_content, $str, 1);
        }
//        var_dump($anchor_ids);
        return $anchor_ids;
//        return $str;

    }
    public static function anchour($str){
        $anchors = Anchor::find()->asArray()->orderBy("sort desc")->all();
        $rule = "/<img.*>/";
        //先把img排除掉,并且将其存为一个数组
        preg_match_all($rule, $str, $matches);
        $str_without_alt = preg_replace($rule, 'Its_Just_A_Mark', $str);
        //锚处理
        $str_s = $str;
        $i = 0;
        $k = 0;
        $urls = array();
        $anchor_ids = array();
        foreach ($anchors as $key => $anchor) {

            $rule = "/" . $anchor['name'] . "(?!((?!<a\b)[\s\S])*<\/a>)/";
            $href = '<a href="' . $anchor['url'] . '" class = "seo-anchor">' . $anchor['name'] . '</a>';
            $str_old = $str;
//            error_log($anchor['name'].'---',3,'test.log');
            $str_new = preg_replace($rule, $href, $str, $anchor['num']);

            if ($str_old != $str_new) {

                array_push($urls, $anchor['url']);
                array_push($anchor_ids, $anchor['id']);
                $str = $str_new;
                $i++;
            }
            if ($i >= 4) {break;}//最多显示4个关键词


        }

    }
    public static function tihuan($key,$word,$str){
        $new_work='This_'.$key.'_Work';
        $anchor['name']=$word;
        $rule = "/" . $anchor['name'] . "(?!((<a\b)[\s\S])*<\/a>)/";
        $str=preg_replace($rule, $new_work, $str, 1 );
        return $str;
    }
    public static function huanti($list,$str){
        foreach ($list as $key=>$value){
            $href = '<a href="' . $value['url'] . '" class = "seo-anchor" data-anchorid='. $value['id'] .' target="_blank">' . $value['name'] . '</a>';
            $new_work='This_'.$key.'_Work';
            $str=str_replace($new_work,$href,$str);
        }
        return $str;

    }


}

