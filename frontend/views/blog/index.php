<?php

use yii\helpers\Html;
use yii\helpers\Url;
$dataProvider = new \yii\data\ActiveDataProvider([
    'query' => $data['list'],
    'pagination' => [
        'pageSize' => 10,
        'pageSizeParam' => false,
    ],
]);
$this -> beginPage();
?>

<div class="commom_news container">
    <?php $this->beginContent('@app/views/layouts/public/common_left.php') ?>
    <?php $this->endContent() ?>
    <div class="commom_right">
        <div class="news_banner">
            <div class="img">
                <?php foreach (\common\helpers\AdHelper::GetAd_list('gongsixinwen') as $key=>$value):?>
                    <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="news_item_content">
            <div class="top_nav">
                <div class="left">
                    <ul>
                        <?php foreach ($data['category_dengji'] as $key => $value): ?>
                            <li>
                                <div class="item"><a href="/news/<?=$value['name'] ?>.html"><?=$value['title'] ?></a></div>
                            </li>

                        <?php endforeach ?>
                        <li>
                            <div class="item checked"><a href="/blog/">电池博客</a></div>
                        </li>


                    </ul>
                </div>
                <div class="right">
                    <div class="catalog_news">

                        <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>
                        <?php $this->endContent() ?>
                    </div>
                </div>
            </div>
            <div class="content">
                <ul>
                    <?=\yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_list',
                        'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了

                    ]);
                    ?>

                </ul>
            </div>
        </div>
        <section class="section">
            <?php $this->beginContent('@app/views/layouts/public/ad.php'); ?>
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
