<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProhibitedWords */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '违禁词', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prohibited-words-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'category_id',
        ],
    ]) ?>

</div>
    <!-- 定义数据块 -->
<?php $this->beginBlock('test'); ?>
    jQuery(document).ready(function() {
    highlight_subnav('prohibited-words/index'); //子导航高亮

    });
<?php $this->endBlock() ?>
    <!-- 将数据块 注入到视图中的某个位置 -->
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>