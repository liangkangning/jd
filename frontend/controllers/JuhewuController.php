<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 下午 1:52
 */

namespace frontend\controllers;


class JuhewuController extends ProductController
{

    public function actionIndex()
    {
        $this->common();
        return $this->render('/special/diwen',['data'=>$this->data]);
    }


}