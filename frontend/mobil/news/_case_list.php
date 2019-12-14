<?php

use yii\helpers\Html;

use yii\helpers\HtmlPurifier;

use yii\helpers\Url;

?>



<li class="col-md-3 col-sm-6">

    <div class="item">

        <div class="img"><a href="<?=$model->url?>">

                <img src="<?=$model->imageUrl?>" alt="<?=$model->title?>" title="<?=$model->title?>"/>

                <div class="cover"></div>

            </a></div>

        <div class="text"><div class="title"><a href="<?=$model->url?>"><?=$model->title?></a></div>

            <div class="p"><p><?= \common\helpers\StringHelper::truncate($model['description'],33)?></p></div>

        </div>

    </div>

</li>