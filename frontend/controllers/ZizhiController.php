<?php



namespace frontend\controllers;



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

class ZizhiController extends CommonController

{

    /**

     * @var string

     */

    public function actionIndex()

    {



        return $this->render('index');

    }







}

