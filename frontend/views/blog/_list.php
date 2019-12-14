<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>


<li id="<?=Yii::$app->params['news_list_image']?'news_list_image':''?>">
    <div class="item">

        <div class="text">
            <div class="title"><a href="<?=$model->url ?>"><?= Html::encode($model->title) ?></a></div>
            <div class="p"><p><?= Html::encode($model->description) ?></p>
                <div class="time"><?= $model->create_time ?></div>
            </div>
        </div>
    </div>
</li>
