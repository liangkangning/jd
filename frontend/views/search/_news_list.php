<li class="col-md-12 col-sm-12">
    <div class="item">
        <div class="time">
            <div class="day size2-8p"><?=date("m/d",$model->create_time)?></div>
            <div class="year size6-4p text-right"><?=date("Y",$model->create_time)?></div>
        </div>
        <div class="text">
            <div class="a_title"><a class="size4-6p" href="<?= $model->url?>"><?= $model->title?></a></div>
            <div class="p size7-3_5p"><p><?= $model->description?></p></div>
        </div>
    </div>
</li>