<?phpnamespace frontend\controllers;use common\helpers\ArrayHelper;use common\helpers\StringHelper;use common\models\Article;use common\models\ArticleAnchor;use common\models\AttrImages;use common\models\Category;use common\models\CategoryImages;use common\models\Images;use yii\web\Controller;use yii;use yii\log\Logger;class AnchorController extends CommonController{    /**     * @var string     */    public $layout = 'main';    public function actionIndex()    {        if (!empty(Yii::$app->request->post('anchor_id'))){            $anchor_id= Yii::$app->request->post('anchor_id');            $article_id= Yii::$app->request->post('article_id');            $art= ArticleAnchor::find()->where(['article_id'=>$article_id,'anchor_id'=>$anchor_id])->one();            $art->click=$art->click+1;            $art->save();//            error_log($article_id . '---', 3, 'test.log');        }else{            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');        }    }}