<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->beginPage();
?>
<script src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=423002"></script>
<link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_24.css">
<div class="commom_news container">
    <?php $this->beginContent('@app/views/layouts/public/common_left.php') ?>
    <?php $this->endContent() ?>
    <div class="commom_right">
        <div class="news_banner">
            <div class="img">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('news_detail') as $key=>$value):?>
                    <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>
                <?php endforeach; ?>
            </div>
        </div>
        <section>
            <div class="detail_news">
                <div class="top">
                    <div class="catalog_news float_right">
                        <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
                        <?php $this->endContent() ?>
                    </div>
                </div>
                <div class="content">
                    <div class="title">
                        <h1><?= $data['detail']['title']; ?></h1>
                    </div>
                    <div class="addthis_sharing_toolbox">
                        <div class="new_title"><!--Juda-->
                            <span class="kuan"></span>
                            <span>来源：钜大LARGE &nbsp;&nbsp;</span>
                            <span class="kuan"></span>
                            <span><?= $data['detail']['create_time']?>&nbsp;&nbsp;&nbsp;</span>
                            <span class="kuan"></span>
                            <span>点击量：<em><?=$data['detail']['click']?></em>次</span>

                        </div>
                    </div>
                    <div class="text">
                        <?= \common\helpers\Html::decode($data['detail']['content']); ?>
                    </div>
                </div>
                <div class="bottom ">
                    <div class="fengx col-md-5">
                        <div class="bdsharebuttonbox ">
                            <a href="#" class="bds_more" data-cmd="more"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>

                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>

                        </div>
                    </div>
                    <div class="next_before  col-md-7">
                        <div class="before"><p>上一篇：<a href="<?=$data['prev_article']['url']?>"><?=$data['prev_article']['title']?></a></p></div>
                        <div class="next"><p>下一篇：<a href="<?=$data['next_article']['url']?>"><?=$data['next_article']['title']?></a></p></div>
                    </div>
                </div>

            </div>
        </section>


        <section class="section">
            <?php $this->beginContent('@app/views/layouts/public/ad.php'); ?>
            <?php $this->endContent(); ?>
        </section>
        <section class="section">
            <?php $this->beginContent('@app/views/layouts/public/xiangguan_product.php'); ?>
            <?php $this->endContent(); ?>
        </section>

        <section class="section">
            <?php $this->beginContent('@app/views/layouts/public/xiangguan_zixun.php'); ?>
            <?php $this->endContent(); ?>
        </section>
    </div>
</div>

<?php $this->endPage()
?>
