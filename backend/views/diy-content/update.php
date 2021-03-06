<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DiyContent */

$this->title = 'Update Diy Content: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Diy Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diy-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
