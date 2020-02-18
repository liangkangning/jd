<div class="part container yanjiuyuan">
    <div class="img"><img src="/assets/images/yanfa_yanjiuyuan_1.jpg" alt=""></div>
    <section><h2>钜大特种锂离子电池工程研究院</h2></section>
    <section class="widht-margin">
        <div class="text section30">
            <h3>研究院简介</h3>
            <p>研究院是公司与中南大学、华南理工大学和东莞理工联合运营的特种锂离子电池产业化研发中心，秉持
                <strong>"以特殊环境、特殊用途和特殊性能的需求为导向，以产学研深度融合为创新驱动"</strong>的办院方针，力求满足用户独特的需要，从而为用户创造独特的价值。</p>
        </div>
    </section>
    <section class="widht-margin"><div class="img section"><img src="/assets/images/yanfa_yanjiuyuan_2.jpg" alt=""></div></section>
    <section class="widht-margin">
        <div class="text section">
            <h3>研究院目的</h3>
            <p>
                研究院首先是校企联合的针对电池技术的研发中心，其成立的目的是在于针对性的解决电池在极端环境下的使用问题以及储能前沿材料的开发应用问题，并且为企业客户提供定制化解决方案
            </p>
        </div>
    </section>
    <section class="widht-margin"><div class="img section"><img src="/assets/images/yanfa_yanjiuyuan_3.jpg" alt=""></div></section>
    <div class="banner_common relative h300 section">
        <div class="img"><img src="/assets/images/about_zizhi_2.jpg" alt="专家团队" title="专家团队"></div>
        <div class="text">
            <div class="content">
                <h1 class="size2-8p">专家团队</h1>
                <p class="size5-5p section30">
                    研究院专家团队拥有包括测控、电化学、光机电、电力电子、信号处理和仪器仪表等专业技术门类<br>
                    包括教授专家9人，副教授专家2人，中高级职称工程师12人，其中国家千人计划2人，教授博导7人</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="yanfa_team">
            <div class="bottome_tx section">
                <div class="list widht-margin">
                    <ul class="row">
                        <?php foreach (Yii::$app->params['yanfa_team'] as $key=>$value):?>
                            <?php if ($key<3): ?>
                                <li class="col-md-4">
                                    <div class="item">
                                        <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="sub_title"><?= $value['sub_title'] ?></div>
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
                        <?php foreach (Yii::$app->params['yanfa_team'] as $key=>$value):?>
                            <?php if ($key<3): ?>
                                <li class="col-md-12">
                                    <div class="item">
                                        <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                        <div class="text col-md-6">
                                            <div class="title"><?= $value['title'] ?></div>
                                            <div class="sub_title"><?= $value['sub_title'] ?></div>
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
                        <?php foreach (Yii::$app->params['yanfa_team'] as $key=>$value):?>
                            <?php if ($key>=3): ?>
                                <li class="col-md-4">
                                    <div class="item">
                                        <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                        <div class="title"><?= $value['title'] ?></div>
                                        <div class="sub_title"><?= $value['sub_title'] ?></div>
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
                        <?php foreach (Yii::$app->params['yanfa_team'] as $key=>$value):?>
                            <?php if ($key>=3): ?>
                                <li class="col-md-12">
                                    <div class="item">
                                        <div class="img col-md-6"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                                        <div class="text col-md-6">
                                            <div class="title"><?= $value['title'] ?></div>
                                            <div class="sub_title"><?= $value['sub_title'] ?></div>
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
        </div>
    </section>


</div>