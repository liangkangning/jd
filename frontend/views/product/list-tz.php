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

<div class="tz-list">
    <div class="banner_common header_banner_common relative">
            <div class="img"><img src="<?=Yii::$app->params['top_lanmu']['imageUrl']?>" alt="<?= Yii::$app->params['lanmu']['title']?>"></div>
            <div class="text">
                <div class="content">
                    <?=Yii::$app->params['lanmu']['list_content']?>
                </div>
            </div>
    </div>
    <div class="main product-list-index">
        <div class="nav-list-category container">
            <ul>
                <?php foreach (Yii::$app->params['nav_list'] as $key=>$value):?>
                    <li class="<?=  $value['name']==Yii::$app->controller->id?'checked':'' ?>"><a href="<?= $value['url']?>"><?= $value['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="product-list">
            <div class="list container">
                    <ul>
                        <?=\yii\widgets\ListView::widget([
                            'dataProvider' => $productProvider,
                            'itemView' => '/special/_list',
                            'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                            'options' => [
                                'tag' => 'div',
                            ],
                            'itemOptions' => [
                                'tag' => false,
                            ],
                            'pager'=>[
                                //'options'=>['class'=>'hidden']//关闭自带分页
                                'prevPageLabel'=>'上一页',
                                'nextPageLabel'=>'下一页',
                            ],
                        ]);
                        ?>
                    </ul>
            </div>

        </div>
        <div class="banner_common">
            <div class="img"><img src="<?=Yii::getAlias('@web/assets/images/product-content-bg.jpg')?>" alt=""></div>
            <div class="text text_left">
                <div class="container">
                    <?=Yii::$app->params['lanmu']['content']?>
                </div>

            </div>
        </div>
    </div>

    <?php $this->beginContent('@app/views/layouts/public/bottom_seach.php') ?>
    <?php $this->endContent() ?>

    <?php $this->beginContent('@app/views/layouts/public/hexin_jishu.php') ?>
    <?php $this->endContent() ?>

    <?php $this->beginContent('@app/views/layouts/public/news-list.php') ?>
    <?php $this->endContent() ?>
</div>