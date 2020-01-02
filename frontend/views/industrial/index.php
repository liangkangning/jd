
<div class="category-index">
    <div class="banner_common relative pic_open">
        <div class="img"><img src="/assets/images/gongye_banner.jpg" alt="工业电池" title="工业电池"></div>
        <div class="text">
            <div class="content">
                <h1 class="sizemax-12p">工业电池</h1>
                <p class="size4-6p section40">18年专注锂电池定制/可靠·安全</p>
            </div>
        </div>
    </div>
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
                                    <div class="title1 size4-6p" style="color: <?= $v['tuozhan']?>"><?= $v['h1']?></div>
                                    <?php if ($v['h2']): ?>
                                        <div class="title2 size5-5p" style="color: <?= $v['tuozhan']?>"><?=$v['h2'] ?></div>
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
    <div class="getiao section"></div>
    <?php foreach ($data as $key=>$value):?>
    <section class="part <?=$value['color'] ?>">
        <div class="container">
            <div class="title">
                <h2 class="pull-left"><?=$value['title'] ?></h2>
                <div class="more pull-right"><a href="<?=$value['url'] ?>">更多 ></a></div>
            </div>
            <div class="content section30">
                <div class="left-part pull-left ">
                    <div class="relative">
                        <div class="to_black">
                            <dvi class="img ">
                                <img src="/assets/images/<?=$value['images'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>">
                            </dvi>
                            <div class="text">
                                <p><?=$value['text'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-part pull-right">
                    <div class="list product_common_while">
                        <ul>
                            <?php foreach ($value['list'] as $key=>$value):?>
                                <li class="col-md-3">
                                    <div class="item">
                                        <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                                        <div class="text"><a href="<?= $value['url'] ?>"><?=$value['title'] ?></a></div>
                                    </div>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach;?>

</div>

<?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
<?php $this->endContent() ?>

