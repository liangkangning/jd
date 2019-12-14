<?php



namespace phone\controllers;



use yii\web\Controller;

use yii;

class SizeController extends CommonController

{

    /**

     * @var string

     */

    public function actionIndex(){

        echo 2;

    }





    public function actionError()

    {

//        return $this->redirect('index', 404);

//        $this->layout=false;
        $response=new yii\web\Response();
        $response->setStatusCode(404);
        $response->send();
//        return $this->redirect('index', 404);

//        $this->layout=false;

        $this->layout='main1';

//        return $this->render('index');




        return $this->render('index');



    }





}

