<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
?>


<li id="<?=Yii::$app->params['news_list_image']?'news_list_image':''?>">
    <div class="item">
        <div class="img"><a href="<?=$model->url ?>">
                <img src="<?=$model->imageUrl?>" alt="<?=$model->title?>" title="<?=$model->title?>"/>
                <div class="cover"></div>
            </a></div>
        <div class="text">
            <div class="title"><a href="<?=$model->url ?>"><?= Html::encode($model->title) ?></a></div>
            <div class="p"><p><?= Html::encode($model->description) ?></p>
                <div class="time"><?= Html::encode(date('Y-m-d H:i:s',$model->create_time)) ?></div>
            </div>
        </div>
    </div>
</li>
