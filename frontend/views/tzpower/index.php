<div class="tzpower-index">
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
                <div class="title section60 col-md-12">
                    <h2 class="pull-left"><a href="<?=$value['url'] ?>"><?=$value['title'] ?></a></h2>
                </div>
                <div class="content section30 col-md-12">
                    <div class="right-part pull-right">
                        <div class="list product_list_common_bg_while">
                            <ul>
                                <li class="col-md-4">
                                    <a href="<?=$value['url'] ?>"><img src="/assets/images/<?=$value['images']?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a>
                                </li>
                                <?php foreach ($value['list'] as $key=>$value):?>
                                    <?php if ($key==0): ?>
                                        <li class="col-md-8">
                                            <div class="item one_product">
                                                <div class="col-md-6">
                                                    <div class="text">
                                                        <div class="section40">
                                                            <?php foreach ($value['extendMoreText'] as $k=>$text):?>
                                                            <p>
                                                                <?= \common\helpers\Html::tag($k==0?'a':'span',$text,["href"=>$value['url']])?>
                                                            </p>
                                                            <?php endforeach;?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php else:?>
                                        <li class="col-md-4">
                                            <div class="item">
                                                <div class="img"><a href="<?=$value['url'] ?>"><img src="<?=$value['imageUrl'] ?>" alt="<?=$value['title'] ?>" title="<?=$value['title'] ?>"></a></div>
                                                <div class="title"><a href="<?= $value['url']?>"><?= $value['h1']?></a></div>
                                                <div class="sub_title"><a href="<?= $value['url']?>"><?= $value['h2']?></a></div>
                                            </div>
                                        </li>
                                    <?php endif;?>

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
