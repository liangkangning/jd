<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProhibitedWordsSerarch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '违禁词列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prohibited-words-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            ['attribute'=>'category_id',
                'value'=>'category.name',
                'filter'=>\common\models\ProhibitedWordsCategory::find()
                    ->select(['name','id'])
                    ->indexBy('id')
                    ->column(),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
    <!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>
    jQuery(document).ready(function() {
    highlight_subnav('prohibited-words/index'); //子导航高亮

    });
<?php $this->endBlock() ?>
    <!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>