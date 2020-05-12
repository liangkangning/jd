<?php

use common\models\Picture;
use yii\helpers\Html;
use yii\helpers\Url;
use common\helpers\ArrayHelper;
//var_dump($this->params['product_list']);
$this -> beginPage();
$listUrl='?list=';

$keyword = Yii::$app->request->get('keyword');
$type = Yii::$app->request->get('type') ?: "product";
$text = "";
$type_list = ['product' => '产品', 'news' => '资讯', 'case' => '案例'];
$type_text = $type_list[$type];
if ($type=="product"){
    if (Yii::$app->params['count']==0){
        $text = "产品，为您推荐以下产品";
    }else{
        $text = "产品";
    }

}elseif ($type=="news"){
    $text = "资讯";
} elseif ($type=="case"){
    $text = "案例";
}
?>
<div class="search_index_2020">
    <section class="search">
        <div class="img"><img src="<?= Yii::getAlias('@web/assets/images/search_bg.jpg')?>" /></div>
        <div class="form">
            <form id="search_form_index" method="get&quot;&quot;" action="/search/" name="form">
                <div class="top">
                    <div class="input-group">
                        <div class="input-group-btn search-dropdown">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$type_text?><i></i></button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)" data-title="product">产品</a></li>
                                <li><a href="javascript:void(0)" data-title="news">资讯</a></li>
                                <li><a href="javascript:void(0)" data-title="case">案例</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <input class="input" type="text" id="keywordInput" name="keyword" placeholder="搜索" value="<?=$keyword?>">
                        <input class="input" type="hidden"  name="type"  value="<?=$type?>">
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
                    <div class="item border_bottom_line_hover"><a class="<?=$type=='product'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=product">相关产品</a></div>
                </li>
                <li>
                    <div class="item border_bottom_line_hover"><a class="<?=$type=='news'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=news">相关资讯</a></div>
                </li>
                <li>
                    <div class="item border_bottom_line_hover"><a class="<?=$type=='case'?'active':''?>" href="/search/?keyword=<?= $keyword?>&type=case">定制案例</a></div>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <div class="container">
<!--            产品列表-->
            <?php if ($type=="product"): ?>
                <div class="product_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['product_data']['total']?></span>件<?= $text?></p>
                    </div>
                    <div class="product-list-index">
                        <div class="product-list">
                          <div class="list">
                              <ul>
                                  <?php foreach (Yii::$app->params['product_data']['list'] as $key=>$model):?>
                                      <li class="col-md-3 col-sm-6">
                                          <div class="item">
                                              <div class="img"><a href="<?= \yii\helpers\Url::to(['product/detail','id'=>$model['id']])?>"><img  src="http://images.juda.cn/image/<?=$model['path']?>" alt="<?=$model['title']?>"  title="<?=$model['title']?>"/></a></div>
                                              <div class="text"><p><a href="<?= \yii\helpers\Url::to(['product/detail','id'=>$model['id']])?>"><?= $model['title']?></a></p></div>
                                          </div>
                                      </li>
                                  <?php endforeach;?>
                                  <?php $newspagination = new \yii\data\Pagination(['totalCount'=>Yii::$app->params['product_data']['totalPage'],'defaultPageSize' => 2]); ?>
                                  <div id="fenye">
                                      <?php
                                      echo \yii\widgets\LinkPager::widget([
                                          'pagination'=>$newspagination,//分页类
                                          'options'=>[ 'class' => 'pagination'],  //设置分页组件样式
                                      ]);
                                      ?>
                                  </div>

                              </ul>

                          </div>
                        </div>
                    </div>
                <?php endif;?>

<!--            新闻列表-->
            <?php if ($type=="news"): ?>
                <div class="news_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['news_data']['total']?></span>条<?= $text?></p>
                    </div>
                    <div class="list">
                        <ul>
                            <?php foreach (Yii::$app->params['news_data']['list'] as $key=>$model):?>
                            <?php $model['create_time'] = isset($model['create_time'])?$model['create_time']:$model['createTime']?>
                                <li class="col-md-12 col-sm-12">
                                    <div class="item">
                                        <div class="time">
                                            <div class="day size2-8p"><?=$model['click']?></div>
                                            <div class="year size6-4p text-right">点击量</div>
                                        </div>
                                        <div class="text">
                                            <div class="a_title"><a class="size4-6p" href="<?= \yii\helpers\Url::to(['news/detail','id'=>$model['id']])?>"><?= $model['title']?></a></div>
                                            <div class="p size7-3_5p"><p><?= $model['description']?></p></div>
                                            <div class="time_text size7-3_5p section10"><?= date("Y-m-d",$model['create_time'])?></div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach;?>
                            <?php $newspagination = new \yii\data\Pagination(['totalCount'=>Yii::$app->params['news_data']['totalPage'],'defaultPageSize' => 2]); ?>
                            <div id="fenye">
                                <?php
                                echo \yii\widgets\LinkPager::widget([
                                    'pagination'=>$newspagination,//分页类
                                    'options'=>[ 'class' => 'pagination'],  //设置分页组件样式
                                ]);
                                ?>
                            </div>

                        </ul>
                    </div>
                </div>
            <?php endif;?>

<!--            案例列表-->
            <?php if ($type=="case"): ?>
                <div class="case_list">
                    <div class="title">
                        <p>已为您找到<span><?=Yii::$app->params['cases_data']['total']?></span>个<?= $text?></p>
                    </div>
                    <div class="case-index">
                        <div class="case_list">
                            <div class="list">
                                <ul>
                                    <?php foreach (Yii::$app->params['cases_data']['list'] as $key=>$model):?>
                                        <?php $titles=\common\helpers\ArrayHelper::extend($model['extend']); $url = \yii\helpers\Url::to(['news/detail','id'=>$model['id']]);
                                        $picture = Picture::find(['path'])->where(['id' => $model['cover']])->asArray()->one();
                                        $imageUrl = Yii::getAlias('@imagesUrl') . '/' . $picture['path'] . '?x-oss-process=style/small';
                                        ?>
                                        <li class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="img relative fade-out">
                                                    <a href="<?=$url?>">
                                                        <img src="<?=$imageUrl?>" alt="<?=$model['title']?>" title="<?=$model['title']?>"/>
                                                    </a>
                                                    <div class="text"><p>点击量：<?=$model['click']?>次</p></div>
                                                </div>
                                                <div class="text">
                                                    <?php if (count($titles)>0): ?>
                                                        <div class="title">
                                                            <a href="<?=$url?>"><?= count($titles)<=0?'':$titles[0]?></a>
                                                        </div>
                                                        <div class="sub_title">
                                                            <a href="<?=$url?>"><?= count($titles)<=0?'':$titles[1]?></a>
                                                        </div>
                                                    <?php else:?>
                                                        <div class="title">
                                                            <a href="<?=$url?>"><?= $model['title']?></a>
                                                        </div>
                                                    <?php endif;?>
                                                    <div class="p"><p><?= $model['description']?></p></div>
                                                </div>

                                            </div>
                                        </li>
                                    <?php endforeach;?>
                                    <?php $newspagination = new \yii\data\Pagination(['totalCount'=>Yii::$app->params['cases_data']['totalPage'],'defaultPageSize' => 2]); ?>
                                    <div id="fenye">
                                        <?php
                                        echo \yii\widgets\LinkPager::widget([
                                            'pagination'=>$newspagination,//分页类
                                            'options'=>[ 'class' => 'pagination'],  //设置分页组件样式
                                        ]);
                                        ?>
                                    </div>
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