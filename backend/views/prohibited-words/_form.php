<?php

use yii\helpers\Html;
use common\core\ActiveForm;
use common\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\ProhibitedWords */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prohibited-words-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->selectList(
        ArrayHelper::listDataLevel(\common\models\ProhibitedWordsCategory::find()->asArray()->all(), 'id', 'name'),['prompt'=>'请选择'],
        ['class'=>'form-control c-md-2'])->label('违禁词分类'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
