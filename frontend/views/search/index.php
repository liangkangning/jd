<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\helpers\ArrayHelper;
//var_dump($this->params['product_list']);
$this -> beginPage();
$listUrl='?list=';

$keyword = Yii::$app->request->get('keyword');
$type = Yii::$app->request->get('type') ?: "product";
$text = "";
if ($type=="product"){
    if (Yii::$app->params['count']==0){
        $text = "产品,为你推荐以下产品";
    }else{
        $text = "产品";
    }

}elseif ($type=="produc"){
    $text = "资讯";
} elseif ($type=="case"){
    $text = "案例";
}
?>
<div class="search_index_2020">
    <section class="search">
        <div class="img"><img src="<?= Yii::getAlias('@web/assets/images/search_bg.jpg')?>" /></div>
        <div class="form">
            <form id="search_form" method="get&quot;&quot;" action="/search/" name="form">
                <div class="top">
                    <div class="input-group">
                        <input class="input" type="text" id="keywordInput" name="keyword" placeholder="搜索" value="<?=$keyword?>">

                        <i class="search_ico" id="topSearchButton"></i>

                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="search_nav">
        <div class="container">
            <ul>
                <li>
                    <div class="item"><a class="<?=$type=='product'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=product">相关产品</a></div>
                </li>
                <li>
                    <div class="item"><a class="<?=$type=='news'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=news">相关资讯</a></div>
                </li>
                <li>
                    <div class="item"><a class="<?=$type=='case'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=case">定制案例</a></div>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <div class="container">
<!--            产品列表-->
            <?php if (isset(Yii::$app->params['product_list'])): ?>
                <div class="product_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['count']?></span>件<?= $text?></p>
                    </div>
                    <div class="product-list-index">
                        <div class="product-list">
                          <div class="list">
                              <ul>
                                  <?=\yii\widgets\ListView::widget([
                                      'dataProvider' => Yii::$app->params['product_list'],
                                      'itemView' => '_list',
                                      'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                                      'options' => [
                                          'tag' => 'div',
                                      ],
                                      'itemOptions' => [
                                          'tag' => false,
                                      ],
                                  ]);
                                  ?>
                              </ul>

                          </div>
                        </div>
                    </div>
                <?php endif;?>

<!--            新闻列表-->
            <?php if (isset(Yii::$app->params['news_list'])): ?>
                <div class="news_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['count']?></span>条<?= $text?></p>
                    </div>
                    <div class="list">
                        <ul>
                            <?=\yii\widgets\ListView::widget([
                                'dataProvider' => Yii::$app->params['news_list'],
                                'itemView' => '_news_list',
                                'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                                'options' => [
                                    'tag' => 'div',
                                ],
                                'itemOptions' => [
                                    'tag' => false,
                                ],
                            ]);
                            ?>
                        </ul>
                    </div>
                </div>
            <?php endif;?>

<!--            案例列表-->
            <?php if (isset(Yii::$app->params['case_list'])): ?>
                <div class="case_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['count']?></span>个<?= $text?></p>
                    </div>
                    <div class="case-index">
                        <div class="case_list">
                            <div class="list">
                                <ul>
                                    <?=\yii\widgets\ListView::widget([
                                        'dataProvider' => Yii::$app->params['case_list'],
                                        'itemView' => '/news/_case_list',
                                        'layout' => "{items}<div id='fenye'>{pager}</div>",//加个这就好了
                                        'options' => [
                                            'tag' => 'div',
                                        ],
                                        'itemOptions' => [
                                            'tag' => false,
                                        ],
                                    ]);
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
    </section>
    <?php $this->beginContent('@app/views/layouts/public/jingxuan.php') ?>
    <?php $this->endContent() ?>
</div>
<?php $this->endPage()
?>