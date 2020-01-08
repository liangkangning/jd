<?php
use yii\helpers\Html;
use yii\helpers\Url;
$productProvider= new \yii\data\ActiveDataProvider([
    'query' => $data['list'],
    'pagination'=>[
        'pageSize'=>12,
        'pageSizeParam' => false,
    ],
]);
?>
<div class="case-index">
    <div class="banner_common header_banner_common relative">
        <div class="img"><img src="/assets/images/case-banner.jpg" alt=""></div>
        <div class="text">
            <div class="content">
                <h1 class="sizemax-12p">定制案例</h1>
                <p class="size4-6p section40">3000+成功案例</p>
            </div>
        </div>
    </div>
    <div class="case_list" id="case_list">
        <div class="container">
            <div class="top ">
                <div class="title pull-left"><?= $data['title']?></div>
                <div class="nav_list pull-right">
                    <ul>
                        <li class="pull-left">
                            <?php foreach ($data['tree'] as $key=>$vlaue):?>
                                <a class="<?= $vlaue['title']==$data['title']?'color_y':''?>" href="/news/<?=$vlaue->name?>.html"><?=$vlaue['title']?></a>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="list section30">
                <ul>
                    <?=\yii\widgets\ListView::widget([
                        'dataProvider' => $productProvider,
                        'itemView' => '_case_list',
                        'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                        'itemOptions' => [
                            'tag' => false,
                        ],
                    ]);
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="case-content">
        <div class="img"><img src="<?=Yii::getAlias('@web/assets/images/product-content-bg.jpg')?>" alt=""></div>
        <div class="text">
            <div class="container">
                <?=Yii::$app->params['lanmu']['content']?>
            </div>

        </div>
    </div>
    <?php $this->beginContent('@app/views/layouts/public/seach_jingxuan_news.php') ?>
    <?php $this->endContent() ?>


</div>
