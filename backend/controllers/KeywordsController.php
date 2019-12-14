<?php

namespace backend\controllers;

use common\helpers\ArrayHelper;
use common\helpers\TijiaoHelper;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Images;
use common\models\AttrImagesSelect;
use Yii;
use common\models\Keywords;
use common\models\KeywordsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeywordsController implements the CRUD actions for Keywords model.
 */
class KeywordsController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST','GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Keywords models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->setForward();
        foreach (Keywords::find()->asArray()->all() as $key=>$value){
            $keyw=Keywords::find()->where(['id'=>$value['id']])->one();
            $keyw->num=count($this->get_images_ids($keyw));
            $keyw->save();

        }
        $searchModel = new KeywordsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function get_images_ids($keyw){
        $keywods=explode('-',$keyw->keywords);
        $product_list_id=ArrayHelper::getColumn(Images::find()->where(['like','title',$keywods])->asArray()->all(),'id');//根据关键词获取产品ID
//            根据属性获取对于的产品
        $array=array();
        foreach (ArrayHelper::string2array($keyw['attr_value_id']) as $key=>$value){
            $next_array=explode("|",$value);
            if (count($next_array)>1){
                $query=AttrImagesSelect::find();
                foreach ($next_array as $k=>$v){
                    $query=$query->orWhere(['attr_value_id'=>$v]);
                }
                $arrayItem=ArrayHelper::getColumn($query->groupBy('images_id')->asArray()->all(),'images_id');

            }else{
                $arrayItem=ArrayHelper::getColumn(AttrImagesSelect::find()->where(['attr_value_id'=>$value])->asArray()->all(),'images_id');//选择的属性对于的商品

            }
            if ($key>=1){
                $array=array_merge($array,$arrayItem);
                $array = ArrayHelper::FetchRepeatMemberInArray ($array);
            }else{
                $array=array_merge($array,$arrayItem);
            }
        }
//            var_dump($array);


        //判断是否选择分类
        if (!empty($keyw->category_id)){
            $query=CategoryImages::find();
            foreach (ArrayHelper::string2array($keyw->category_id) as $kk=>$vv){
                $query->orWhere(['category_id'=>$vv]);
            }
            $product_category_list=ArrayHelper::getColumn( $query->groupBy('images_id')->asArray()->all(),'images_id');

            if(count($array)>0){
                $array=ArrayHelper::FetchRepeatMemberInArray(array_merge($array,$product_category_list));
            }else{
                $array=ArrayHelper::FetchNotRepeatMemberInArray(array_merge($array,$product_category_list));
            }


        }
//            获取所有产品的id
        $array_id_s=ArrayHelper::FetchNotRepeatMemberInArray(array_merge($product_list_id,$array));
        return $array_id_s;
    }

    public function actionAdd()
    {
        $model = $this->findModel(0);

        if (Yii::$app->request->isPost) {

            $data = Yii::$app->request->post('Keywords');
            //处理分类标签数组--start
            if (!empty($data['category_id'])){
                $arrays=array();
                foreach ($data['category_id'] as $key=>$value){

                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['category_id']=implode(',',$arrays);
            }

            //处理分类标签数组--end
            //处理属性标签数组--start
//            var_dump($data['attr_value_id']);
//            if (!empty($data['attr_value_id'])){
//                $arrays=array();
//                foreach ($data['attr_value_id'] as $key=>$value){
//                    if(!empty($value))
//                        $arrays=array_merge($arrays,$value);
//                }
//                $data['attr_value_id']=implode(',',$arrays);
//            }
            //处理属性标签数组--end




            /* 表单数据加载、验证、数据库操作 */
            $result=$this->saveRow($model, $data);
            if ($result) {

                $this->success('操作成功'.$result->primaryKey, $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }

        /* 获取模型默认数据 */
        $model->loadDefaultValues();
        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }

    public function actionEdit(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Keywords');

//            if (!empty($data['attr_value_id'])){
//                $arrays=array();
//                foreach ($data['attr_value_id'] as $key=>$value){
//                    if(!empty($value))
//                        $arrays=array_merge($arrays,$value);
//                }
//                $data['attr_value_id']=implode(',',$arrays);
//            }
            //处理分类标签数组--start
            if (!empty($data['category_id'])){
                $arrays=array();
                foreach ($data['category_id'] as $key=>$value){

                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['category_id']=implode(',',$arrays);
            }


            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
//                  var_dump($default);
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        /* 还原extend的数据 */

        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    /**
     * Updates an existing Keywords model.
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
     * Deletes an existing Keywords model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel(0);
        if($this->delRow($model, 'id')){
            $this->success('删除成功', $this->getForward());
        } else {
            $this->error('删除失败！');
        }
    }

    public function actionTijiao()
    {
        $list=Keywords::find()->where(['>=','num','2'])->select(['id','name'])->all();
        $ulrs=array();
        $ulrs[]='http://m.juda.cn/mip/keywords/';
        foreach ($list as $key=>$value){
            $ulrs[]='http://m.juda.cn/mip/keywords/'.$value->name.'/';
        }
        TijiaoHelper::TijiaoUrl($ulrs);
//        var_dump($ulrs);
    }
    /**
     * Finds the Keywords model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Keywords the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new Keywords();
        }
        if (($model = Keywords::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
