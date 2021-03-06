<div class="tzcell-index">
    <div class="banner_common header_banner_common relative">
        <div class="img"><img src="<?=Yii::$app->params['lanmu']['imageUrl']?>" alt="<?= Yii::$app->params['lanmu']['title']?>"></div>
        <div class="text">
            <div class="content">
                <?=Yii::$app->params['lanmu']['list_content']?>
            </div>
        </div>
    </div>
    <?php foreach ($data as $key=>$value):?>
        <section class="part <?=$value['color'] ?>">
            <div class="container">
                <div class="title section30">
                    <h2 class="pull-left"><a href="<?=$value['url'] ?>"><?=$value['title'] ?></a></h2>
                </div>
                <div class="content section30">
                    <div class="top-part">
                        <div><a href="#"><img src="/assets/images/<?=$value['images'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                    </div>
                    <div class="right-part pull-right">
                        <div class="list product_common_while">
                            <ul>
                                <?php foreach ($value['list'] as $key=>$value):?>
                                    <li class="col-md-4">
                                        <div class="item">
                                            <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                                            <div class="title"><a href="<?= $value['url']?>"><?= $value['h1']?></a></div>
                                            <div class="sub_title"><a href="<?= $value['url']?>"><?= $value['h2']?></a></div>
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

<?php $this->beginContent('@app/views/layouts/public/ad_getiao.php') ?>
<?php $this->endContent() ?>

<?php $this->beginContent('@app/views/layouts/public/chuangxin_jishu.php') ?>
<?php $this->endContent() ?>

<?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
<?php $this->endContent() ?>

<?php $this->beginContent('@app/views/layouts/public/hexin_jishu_new.php') ?>
<?php $this->endContent() ?>
