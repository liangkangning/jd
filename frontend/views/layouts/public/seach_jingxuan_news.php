<div class="seach_jingxuan_news">
    <?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
    <?php $this->endContent() ?>
    <?php $this->beginContent('@app/views/layouts/public/jingxuan.php') ?>
    <?php $this->endContent() ?>

    <div class="news-list container section">
        <div class="nav-list">
            <ul>
                <?php foreach (Yii::$app->params['news_nav_tuijian'] as $key=>$value):?>
                    <li><a href="<?=$value['url']?>"><?=$value['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="list section20">
            <?php if (isset(Yii::$app->params['companyAtricle'])): ?>
                <div class="companyAtricle">
                    <ul>
                        <?php foreach (Yii::$app->params['companyAtricle'] as $key => $value): ?>
                            <li class="col-md-4">
                                <div class="item ">
                                    <div class="img"><a href="<?= $value['url']?>"><img src="<?= $value['imageUrl']?>" alt=""></a></div>
                                    <div class="text section20"><a href="<?= $value['url']?>"><?= $value['title']?></a></div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php else:?>
                <ul>
                    <?php foreach ($this->params['randAtricle'] as $key => $value): ?>
                        <li class="col-md-6">
                            <div class="item ">
                                <div class="title pull-left"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>
                                <div class="time pull-right"><?= date('Y-m-d', $value['create_time']) ?></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif;?>

            <ul class="none">
                <?php foreach (Yii::$app->params['new_news'] as $key => $value): ?>
                    <li class="col-md-6">
                        <div class="item ">
                            <div class="title pull-left"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>
                            <div class="time pull-right"><?= date('Y-m-d', $value['create_time']) ?></div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
