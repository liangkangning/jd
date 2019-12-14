   <div class="common">
    <div class="ad">
        <div class="img">
            <?php foreach (\common\helpers\AdHelper::GetAd_list('ad') as $key=>$value):?>
                <a href="<?=$value->url?>" rel="nofollow" target="_blank"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>
            <?php endforeach; ?>

            </a></div>
    </div>
   </div>
