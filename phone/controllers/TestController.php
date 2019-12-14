<?php



namespace phone\controllers;



use common\helpers\ArrayHelper;

use common\helpers\StringHelper;

use common\models\Article;

use common\models\AttrImages;

use common\models\Category;

use common\models\CategoryImages;

use common\models\Images;

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


        return $this->render('index');

    }







}

