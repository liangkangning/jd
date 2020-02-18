<div class="part container shiyanshi">
    <div class="img"><img src="/assets/images/yanfa_shiyanshi_banner_1.jpg" alt=""></div>
    <section>
        <h2>公司科研平台</h2>
        <div class="keyan widht-margin">
            <ul>
                <li class="col-md-6"><div class="item"><img src="/assets/images/yanfa_shiyanshi_keyan_1.jpg" alt=""></div></li>
                <li class="col-md-6"><div class="item"><img src="/assets/images/yanfa_shiyanshi_keyan_2.jpg" alt=""></div></li>
                <li class="col-md-6"><div class="item"><img src="/assets/images/yanfa_shiyanshi_keyan_3.jpg" alt=""></div></li>
                <li class="col-md-6"><div class="item"><img src="/assets/images/yanfa_shiyanshi_keyan_4.jpg" alt=""></div></li>
            </ul>
        </div>
    </section>
    <div class="banner_common relative h300">
        <div class="img"><img src="/assets/images/about_zizhi_2.jpg" alt="8大实验室" title="8大实验室"></div>
        <div class="text">
            <div class="content">
                <h1 class="size2-8p"><span class="size-16p">8</span>大实验室</h1>
            </div>
        </div>
    </div>
    <section class="shiyanshi_list">

        <div class="bottome_tx section">
            <div class="list widht-margin">
                <ul class="row">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key<2): ?>
                            <li class="col-md-6">
                                <div class="item">
                                    <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="title"><?= $value['title'] ?></div>
                                    <div class="ico"></div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
                <div class="triangle_ico">
                </div>
            </div>
            <div class="item_list">
                <ul class="widht-margin">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key<2): ?>
                            <li class="col-md-12">
                                <div class="item">
                                    <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="text col-md-6">
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="p">
                                            <?= $value['content'] ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>

                </ul>
            </div>
        </div>
        <div class="bottome_tx section20">
            <div class="list widht-margin">
                <ul class="row">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=2&$key<4): ?>
                            <li class="col-md-6">
                                <div class="item">
                                    <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="title"><?= $value['title'] ?></div>
                                    <div class="ico"></div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
                <div class="triangle_ico">

                </div>
            </div>
            <div class="item_list">
                <ul class="widht-margin">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=2&$key<4): ?>
                            <li class="col-md-12">
                                <div class="item">
                                    <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="text col-md-6">
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="p">
                                            <?= $value['content'] ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>

                </ul>
            </div>
        </div>
        <div class="bottome_tx section20">
            <div class="list widht-margin">
                <ul class="row">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=4&$key<6): ?>
                            <li class="col-md-6">
                                <div class="item">
                                    <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="title"><?= $value['title'] ?></div>
                                    <div class="ico"></div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
                <div class="triangle_ico">

                </div>
            </div>
            <div class="item_list">
                <ul class="widht-margin">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=4&$key<6): ?>
                            <li class="col-md-12">
                                <div class="item">
                                    <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="text col-md-6">
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="p">
                                            <?= $value['content'] ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>

                </ul>
            </div>
        </div>
        <div class="bottome_tx section20">
            <div class="list widht-margin">
                <ul class="row">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=6&$key<8): ?>
                            <li class="col-md-6">
                                <div class="item">
                                    <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="title"><?= $value['title'] ?></div>
                                    <div class="ico"></div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>
                </ul>
                <div class="triangle_ico">

                </div>
            </div>
            <div class="item_list">
                <ul class="widht-margin">
                    <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                        <?php if ($key>=6&$key<8): ?>
                            <li class="col-md-12">
                                <div class="item">
                                    <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                    <div class="text col-md-6">
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="p">
                                            <?= $value['content'] ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endif;?>
                    <?php endforeach;?>

                </ul>
            </div>
        </div>
    </section>

</div>