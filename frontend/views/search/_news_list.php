<li class="col-md-12 col-sm-12">
    <div class="item">
        <div class="time">
            <div class="day size2-8p"><?=$model->click?></div>
            <div class="year size6-4p text-right">点击量</div>
        </div>
        <div class="text">
            <div class="a_title"><a class="size4-6p" href="<?= $model->url?>"><?= $model->title?></a></div>
            <div class="p size7-3_5p"><p><?= $model->description?></p></div>
            <div class="time_text size7-3_5p section10"><?= date("Y-m-d",$model->create_time)?></div>
        </div>
    </div>
</li>