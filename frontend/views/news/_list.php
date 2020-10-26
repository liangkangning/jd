<?php
$is_hot  = Yii::$app->controller->action->id=='hot'?true:false;
?>
<?php if (Yii::$app->params['is_img']): ?>
<li class="col-md-12 col-sm-12 is_img">
    <div class="item">
        <div class="img"><a href="<?= $model->url?>"><img src="<?= $model->imageUrl?>" alt="<?= $model->title?>"></a></div>
        <div class="text">
            <div class="title"><a class="size4-6p" href="<?= $model->url?>"><?= $model->title?></a></div>
            <div class="des line-over2 size7-3_5p"><p><?= $model->description?></p></div>
            <div class="time size7-3_5p section40"><?= date("Y-m-d",$model->create_time)?></div>
        </div>
    </div>
</li>
<?php endif;?>
<?php if (!Yii::$app->params['is_img']): ?>
<li class="col-md-12 col-sm-12 is_text">
    <div class="item">
        <div class="time <?=$is_hot?'':'none'?>">
            <div class="day size2-8p"><?=$model->click?></div>
            <div class="year size6-4p text-right">点击量</div>
        </div>
        <div class="text" style="<?=$is_hot?'':'padding-left:0px;'?>" >
            <div class="title"><a class="size4-6p" href="<?= $model->url?>"><?= $model->title?></a></div>
            <div class="des size7-3_5p line-over2"><p><?= $model->description?></p></div>
            <div class="time_text size7-3_5p section10"><?= date("Y-m-d",$model->create_time)?></div>
        </div>
    </div>
</li>
<?php endif;?>