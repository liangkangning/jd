<?php
namespace backend\controllers;
use Yii;
use common\models\ArticleFrom;
use common\models\Article;
use common\helpers\ArrayHelper;
use common\helpers\FuncHelper;
use common\models\Category;
use backend\models\search\ArticleSearch;
use yii\web\NotFoundHttpException;
use common\models\Tag;
/**
 * 文章控制器
 * 作者 ：longfei
 * Email ：phphome@qq.com
 */
class ArticlefromController extends BaseController
{
    /**
     * ---------------------------------------
     * 列表页
     * ---------------------------------------
     */
    public function init(){
        parent::init();
        $this->enableCsrfValidation = false;
    }
    public function actionIndex()
    {
        /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $where = [];
        $get = Yii::$app->request->get();
        if ($get['status']) {
           $where['status'] = $get['status'];
//           $where = ['status'=>$get['status']];
        }
        if ($get['url']) {
//            $where['url'] = 'like' . '%'. $get['url'] .'%';
//            $where = ['status'=>$get['status'],['like','url',$get['url']]];
//            var_dump($where);die;
        }
        $ArticleFrom = new ArticleFrom();
        $dataProvider = $this->lists1($ArticleFrom,$where);
//        count($dataProvider);
//        var_dump($dataProvider);
//        die;
      
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionStatus(){
       if(Yii::$app->request->isPost){
         $post = Yii::$app->request->post();
         $res = Article::find()->where(['title'=>$post['title']])->one();
         if ($res) {
            $result = false;
         }else{
              $af = ArticleFrom::findOne($post['id']);
              $af->title = $post['title'];
              $af->save();
            $result = true;
         }
         
         return json_encode(['result' => $result]);
       }
    }
    public function actionAddAll()
    {
       
       if(Yii::$app->request->isPost){
         $post = Yii::$app->request->post();
         foreach ($post['ids'] as $key => $value) {
              $af = ArticleFrom::findOne($value);
              $af->status = 2;
              $af->save();
         }
       }
       $result = true;
       return json_encode(['result' => $result]);
    }
    public function actionAddDel()
    {
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            foreach ($post['ids'] as $key => $value) {
                $af = ArticleFrom::findOne($value);
                $af->status = -1;
                $af->save();
            }
        }
        $result = true;
        return json_encode(['result' => $result]);
    }
    /**
     * ---------------------------------------
     * 编辑
     * ---------------------------------------
     */
    public function actionUpdate(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        $model['status'] = 2;
            if ($model->save()) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('失败');
            }
    }
    /**
     * ---------------------------------------
     * 编辑
     * ---------------------------------------
     */
    public function actionEdit(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        if ($model->status==2){
            $this->error('已发布，无法修改', $this->getForward());
        }
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('ArticleFrom');
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    /**
     * ---------------------------------------
     * 删除或批量删除
     * ---------------------------------------
     */
    public function actionDelete(){
        $model = $this->findModel(0);
        if($this->delRow($model, 'id')){
            $this->success('删除成功', $this->getForward());
        } else {
            $this->error('删除失败！');
        }
    }
    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new ArticleFrom();
        }
        if (($model = ArticleFrom::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
