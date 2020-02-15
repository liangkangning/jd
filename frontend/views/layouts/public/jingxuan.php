<div class="seach_jingxuan_news">

<div class="product_tuijian container section">
    <div class="title">钜大精选</div>
    <div class="list product_common">
        <ul>
            <?php foreach (\common\helpers\AdHelper::GetAd_list('choice') as $key=>$v):?>
                <li class="col-md-4">
                    <div class="item">
                        <div class="img">
                            <a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a>
                        </div>
                        <div class="text">
                            <div class="title1" >
                                <a class="size2-8p" href="<?= $v['url']?>" style="color: <?= $v['tuozhan']?>"><?= $v['h1']?></a>
                            </div>
                            <?php if ($v['h2']): ?>
                                <div class="title2" >
                                    <a class="size4-6p" href="<?= $v['url']?>" style="color: <?= $v['tuozhan']?>"><?=$v['h2'] ?></a>
                                </div>
                            <?php endif;?>
                            <?php if ($v['h3']): ?>
                                <div class="title3" >
                                    <a class="size5-5p" href="<?= $v['url']?>" style="color: <?= $v['tuozhan']?>"><?=$v['h3'] ?></a>
                                </div>
                            <?php endif;?>
                            <div class="p">
                                <?php if ($v['text']): ?>
                                    <?php foreach ($v['text'] as $key=>$p):?>
                                        <p class="size7-3_5p"><?=$p?></p>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</div>