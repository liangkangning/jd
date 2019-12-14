<div class="case_list">
    <div class="banner">
        <a href="http://m.juda.cn/news/3526.html"> <img src="<?=Yii::getAlias('@web/static/mobil_images/case_banner.jpg')?>" alt="" /></a>
    </div>
    <div class="case_nav">
        <ul>

            <?php foreach ($data['tree'] as $key=>$vlaue):?>

                <?php if ($vlaue['id']==$data['lanmu']['id']):?>
                    <li class="self col-sm-4 col-xs-4"><div class="item"><a href="/news/<?=$vlaue->name?>.html"><h2><?=$vlaue['title']?></h2></a></div></li>
                <?php else:?>
                    <li class="col-sm-4 col-xs-4"><div class="item"><a href="/news/<?=$vlaue->name?>.html"><h2><?=$vlaue['title']?></h2></a></div></li>
                <?php endif;?>
            <?php endforeach; ?>


        </ul>
    </div>
    <div class="list">
        <ul>
            <?php foreach ($data['list_c'] as $key=>$value):?>
            <?php $titles=\common\helpers\ArrayHelper::extend($value->extend);?>
            <li><div class="item commom_padding_l_r">
                    <div class="img"><a href="<?=$value->url?>">

                            <img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/>

                        </a></div>
                    <div class="text">
                        <div class="title"><a href="<?=$value->url?>"><?=$value->title?></a></div>
                        <div class="miaosu">
                            <p><?= \common\helpers\StringHelper::truncate($value['description'],26)?></p>
                        </div>
                    </div>
                </div></li>
            <?php endforeach; ?>

            <?php foreach ($data['list'] as $key=>$value):?>
                <li><div class="item commom_padding_l_r">
                        <div class="img"><a href="<?=$value->url?>">

                                <img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/>

                            </a></div>
                        <div class="text">
                            <div class="title"><a href="<?=$value->url?>"><?=$value->title?></a></div>
                            <div class="miaosu">
                                <p><?= \common\helpers\StringHelper::truncate($value['description'],26)?></p>
                            </div>
                        </div>
                    </div></li>
            <?php endforeach; ?>







        </ul>
    </div>

</div>

<script type="text/javascript">

    $(".licheng li").each(function(){
        var h=$(this).find(".right").innerHeight()+12;
        $(this).height(h)
    });

</script>