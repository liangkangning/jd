<?php

namespace backend\controllers;

use Yii;
use common\models\ProhibitedWords;
use common\models\ProhibitedWordsSerarch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\search\ArticleSearch;
/**
 * ProhibitedWordsController implements the CRUD actions for ProhibitedWords model.
 */
class ProhibitedWordsController extends BaseController
{
    public $enableCsrfValidation = false;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionArticle(){
     /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $searchModel = new ArticleSearch();
        
        $dataProvider = $searchModel->search(['ArticleSearch'=>['prohibite_words_status'=>1]]);
        $category_id=Yii::$app->request->get('ArticleSearch')['category_id']?Yii::$app->request->get('ArticleSearch')['category_id']:0;
//        var_dump(Yii::$app->request->get('ArticleSearch')['category_id']);
        return $this->render('article', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category_id'=>$category_id,

        ]);
    }
    /**
     * Lists all ProhibitedWords models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProhibitedWordsSerarch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProhibitedWords model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProhibitedWords model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProhibitedWords();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProhibitedWords model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProhibitedWords model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProhibitedWords model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProhibitedWords the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProhibitedWords::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
