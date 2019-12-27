<div class="seach_jingxuan_news">
    <?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
    <?php $this->endContent() ?>
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
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>


    <div class="news-list container section">
        <div class="nav-list">
            <ul>
                <li><a href="/news/">相关资讯</a></li>
                <li><a href="/news/">最新资讯</a></li>
            </ul>
        </div>
        <div class="list section20">
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
