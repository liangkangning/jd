<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/17 0017
 * Time: 下午 1:52
 */

namespace frontend\controllers;


class DiwenController extends ProductController
{

    public function actionIndex()
    {
        $this->common();
        if (!\Yii::$app->request->isGet) {
            return $this->renderPartial('@app/mobil/special/attr_ajax.php',['data' => $this->data]);
        }
        return $this->render('/special/diwen',['data'=>$this->data]);
    }


}