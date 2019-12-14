<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>
<li class="col-md-6 col-sm-6">
    <div class="item">
        <div class="img"><a href="<?=$model->url ?>"><img src="<?= $model->imageUrl; ?>" alt="<?= Html::encode($model->title) ?>" title="<?= Html::encode($model->title) ?>"/></a></div>
        <div class="text">
            <div class="title"><a href="<?=$model->url ?>"><?= Html::encode($model->title) ?></a></div>
            <div class="p">
                <p><?= \common\helpers\StringHelper::truncate($model->description,90)  ?></p>
            </div>
        </div>
    </div>
</li>