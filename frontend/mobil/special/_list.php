

<li class="col-md-3 col-sm-6">

    <div class="item">

        <div class="img"><a href="<?= $model->url?>"><img  src="<?=$model->imageUrl?>" alt="<?=$model->title?>"  title="<?=$model->title?>"/></a></div>

        <div class="text"><p><a href="<?= $model->url?>" title="<?=$model->title?>"><?= \yii\helpers\StringHelper::truncate($model->title,28)  ?></a></p></div>

    </div>

</li>

