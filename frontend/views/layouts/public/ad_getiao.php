<section class="section container">
    <?php foreach (\common\helpers\AdHelper::GetAd_list('ad') as $key=>$value):?>
        <div class="getiao_adv img"><a id="qiao" href="<?=$value->url?>" rel="nofollow" target="_blank"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a></div>
    <?php endforeach; ?>

</section>