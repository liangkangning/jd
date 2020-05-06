<li>
    <div class="item widht-margin">
        <div class="left col-md-10">
            <div class="title col-md-12"><p><?php if (strstr($model['np'],"h")): ?><i></i><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php endif;?><?=$model['title']?></p></div>
            <div class="text col-md-12"><p><?=$model['sub_title']?>  |  发布时间<?= date('Y/m/d',$model['create_time']) ?></p></div>
        </div>
        <div class="right col-md-2 ">
            <div class="ico pull-right"></div>
        </div>
        <div class="triangle_ico">
        </div>
    </div>
    <div class="description">
        <div class="p widht-margin">
            <?=$model['content']?>
        </div>
    </div>
</li>