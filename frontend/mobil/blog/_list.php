<?php

use yii\helpers\Html;

use yii\helpers\HtmlPurifier;

use yii\helpers\Url;

?>





<li id="<?=Yii::$app->params['news_list_image']?'news_list_image':''?>">

    <div class="item">



        <div class="text">
            <div class="p">
                <p><a href="<?=$model->url ?>"><?= Html::encode($model->title) ?></a></p>
                <p><?= $model->create_time ?></p>
            </div>

        </div>



    </div>

</li>

