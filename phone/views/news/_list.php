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
            <div class="p">
                <p><a href="<?=$model->url ?>"><?= Html::encode($model->title) ?></a></p>
                <p><?= Html::encode(date('Y-m-d',$model->create_time)) ?></p>
            </div>

        </div>


    </div>

</li>

