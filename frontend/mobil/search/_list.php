

<li>

    <div class="item commom_padding_l_r">

        <div class="img"><a href="<?= \yii\helpers\Url::to(['product/detail','id'=>$model->id])?>"><img  src="<?=$model->imageUrl?>" alt="<?=$model->title?>"  title="<?=$model->title?>"/></a></div>

        <div class="text"><p><a href="<?= \yii\helpers\Url::to(['product/detail','id'=>$model->id])?>"><?= $model->title?></a></p></div>

    </div>

</li>