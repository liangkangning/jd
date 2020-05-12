<?php


namespace common\helpers;


class ApiHelper
{


    public static function getNews($keyword,$pageNum=0,$pageSize=10,$highlight=true,$is_list=false){
        $url = "http://59.110.143.45:9099/search/news";
        $param['keyword'] = $keyword;
        $param['pageNum'] = $pageNum;
        $param['pageSize'] = $pageSize;
        $res = self::curl_post($url,$param);
        $res = json_decode($res, true);
        $data = [];
        if ($res['code']=="200"){//请求成功
            $data = $res['data'];
            if (!$highlight){
                $list = $data['list'];
                foreach ($list as &$item) {
                    $item['title'] = str_replace("<em>","",$item['title']);
                    $item['title'] = str_replace("</em>","",$item['title']);
                    $item['create_time'] = $item['createTime'];
                }
                $data['list'] = $list;
            }
            if ($is_list){
                return $data['list'];
            }
            return $data;
        }
        return $data;
    }

    public static function getProducts($keyword,$pageNum=0,$pageSize=16){
        $url = "http://59.110.143.45:9099/search/product";
        $param['keyword'] = $keyword;
        $param['pageNum'] = $pageNum;
        $param['pageSize'] = $pageSize;
        $res = self::curl_post($url,$param);
        $res = json_decode($res, true);
        $data = [];
        if ($res['code']=="200"){//请求成功
            $data = $res['data'];
            return $data;
        }
        return $data;
    }

    public static function getCases($keyword,$pageNum=0,$pageSize=16){
        $url = "http://59.110.143.45:9099/search/cases";
        $param['keyword'] = $keyword;
        $param['pageNum'] = $pageNum;
        $param['pageSize'] = $pageSize;
        $res = self::curl_post($url,$param);
        $res = json_decode($res, true);
        $data = [];
        if ($res['code']=="200"){//请求成功
            $data = $res['data'];
            return $data;
        }
        return $data;
    }

    public static function deleteNews($id){
        $url = "http://59.110.143.45:9090/esArticle/delete";
        $param['id'] = $id;
        $res = self::curl_post($url,$param);
        return $res;

    }

    static function noRepeatTitle($data,$news_title){//处理重复标题,1.不能跟文章标题（$news_title）重复，数组中文章标题不能重复
        $list = [];
        $title_arr = [];
        foreach ($data as $key=>$value) {
            $repeat = false;
            foreach ($title_arr as $title) {
                if (strstr($value['title'],$title)||strstr($title,$value['title'])) {
                    $repeat = true;
                }
            }
            if (!$repeat&&$value['title']!=$news_title){
                $list[] = $value;
                $title_arr[] = $value['title'];
            }
        }
        return $list;
    }
    static function curl_post($url,$param)
    {
        $ch = curl_init();
        if (stripos($url, "https://") !== FALSE) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
        }
        // 配置
        curl_setopt($ch, CURLOPT_URL, $url);
        //增加配置，不让结果默认显示，并且可以接收
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//0是默认值，默认把数据展示   1 不展示数据，可以接收   RETURN返回   TRANSFER转义、运输
        //添加配置，告诉curl我要用POST方式请求，因为curl发送请求的方式默认是get
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));//设置POST需要传递的值
        //执行
        $result = curl_exec($ch);
        $aStatus = curl_getinfo($ch);
        curl_close($ch);
        if (intval($aStatus["http_code"]) == 200) {
            return $result;
        } else {
            return false;
        }
    }
}