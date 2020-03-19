<?phpuse yii\helpers\Html;use yii\helpers\Url;use \common\helpers\UrlHelp;$data_list=\common\models\Article::find()->where(['category_id'=>'35'])->andWhere(['status'=>1])->orderBy('sort DESC');$dataProvider = new \yii\data\ActiveDataProvider([    'query' => $data_list,    'pagination'=>[        'pageSize'=>6,        'pageSizeParam' => false,    ],]);$this -> beginPage();?><div class="new_index_2020">    <div class="banner_common header_banner_common relative pic_open">        <?php if(isset(Yii::$app->params['urlad'])):?>            <div class="img"><img src="<?=Yii::$app->params['urlad']->imageUrl?>" alt=""></div>            <div class="text">                <div class="content">                    <?=Yii::$app->params['urlad']->content?>                </div>            </div>        <?php else:?>            <div class="img"><img src="<?=Yii::$app->params['lanmu']['imageUrl']?>" alt="<?= Yii::$app->params['lanmu']['title']?>"></div>            <div class="text">                <div class="content">                    <?=Yii::$app->params['lanmu']['list_content']?>                </div>            </div>        <?php endif;?>    </div>    <div class="news_nav_top_list container">        <ul>            <?php foreach (Yii::$app->params['news_nav'] as $key=>$value):?>            <li>                <div class="item"><a href="<?= $value['url']?>"><?= $value['title']?></a></div>            </li>            <?php endforeach;?>        </ul>    </div>    <section class="container section30">        <div id="focusImage" class="news_slide">            <ul class="contents">                <?php foreach (Yii::$app->params['luobo'] as $key=>$value):?>                <li class="<?=$key==0?'current':''?>">                    <div class="image"><a href="<?=$value['url']?>"><img src="/assets/images/<?=$value['id']?>.jpg" ></a></div>                    <div class="text">                        <span class="title"><a class="line-over2" href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></span>                        <p><?= \common\helpers\StringHelper::substr($value['description'],0,100,'utf-8',true)?></p>                        <div class="page"><p><span><?=$key+1?></span> / <?=count(Yii::$app->params['luobo'])?></p></div>                    </div>                </li>                <?php endforeach;?>            </ul>            <div class="pre_next">                <span class="link-watch pre down"></span>                <span class="link-watch next down"></span>            </div>        </div>    </section>    <div class="container">        <section class="section70">            <div class="common_seciton col-md-12">                <div class="top">                    <div class="nav_title border_bottom_line"><h2><a href="/news/gongsixinwen.html">公司新闻</a></h2></div>                    <div class="more"><a href="/news/gongsixinwen.html">更多</a></div>                </div>                <div class="list left_right">                    <ul>                        <?php foreach (Yii::$app->params['gongsixinwen'] as $key=>$value):?>                            <li class="part section30">                                <div class="item">                                    <div class="img"><img src="<?= $value['imageUrl']?>" alt="" title="<?= $value['title']?>"></div>                                    <div class="text">                                        <div class="title line-over1"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                        <div class="des line-over2"><p><?= $value['description']?></p></div>                                        <div class="click"><p>点数量：<?= $value['click']?>次</p></div>                                    </div>                                </div>                            </li>                        <?php endforeach;?>                    </ul>                </div>            </div>        </section>        <section class="section70 left_right">            <div class="common_seciton col-md-6 part ">                <div class="top">                    <div class="nav_title border_bottom_line"><h2><a href="javascript:void(0)">推荐专题</a></h2></div>                </div>                <div class="list ">                    <div class="section25">  <img src="/assets/images/news_tuijian_zhuangti.jpg" alt="推荐专题"></div>                    <ul class="section20">                        <?php foreach (Yii::$app->params['tuijian_zhuanti'] as $key=>$value):?>                            <li class="section10">                                <div class="item">                                    <div class="title_time">                                        <div class="title"><a class="line-over1" href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                        <div class="time"><?= date('Y-m-d',$value['create_time']) ?></div>                                    </div>                                </div>                            </li>                        <?php endforeach;?>                    </ul>                </div>            </div>            <div class="common_seciton col-md-6 part ">                <div class="top">                    <div class="nav_title border_bottom_line"><h2><a href="javascript:void(0)">热门文章</a></h2></div>                </div>                <div class="list ">                    <div class="section25">  <img src="/assets/images/news_remen.jpg" alt="热门文章"></div>                    <ul class="section20">                        <?php foreach (Yii::$app->params['hot'] as $key=>$value):?>                            <li class="section10">                                <div class="item">                                    <div class="title_time">                                        <div class="title"><a class="line-over1" href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                        <div class="time"><?= date('Y-m-d',$value['create_time']) ?></div>                                    </div>                                </div>                            </li>                        <?php endforeach;?>                    </ul>                </div>            </div>        </section>        <section class=" left_right">        <?php foreach (Yii::$app->params['other'] as $key=>$value):?>                <div class="common_seciton col-md-6 part section50">                    <div class="top">                        <div class="nav_title border_bottom_line"><h2><a href="<?= $value['category']['url']?>"><?= $value['category']['title']?></a></h2></div>                        <div class="more"><a href="<?= $value['category']['url']?>">更多</a></div>                    </div>                    <div class="list ">                        <ul class="section20">                            <?php foreach ($value['news'] as $key=>$value):?>                                <?php if ($key==0): ?>                                    <li class="part section10">                                        <div class="item">                                            <div class="img"><a href="<?= $value['url']?>"><img src="<?= $value['ico']?>" alt="<?= $value['title']?>" title="<?= $value['title']?>"></a></div>                                            <div class="text">                                                <div class="title line-over1"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                                <div class="des line-over3"><p><?= $value['description']?></p></div>                                                <!--                                        <div class="click"><p>点数量：--><?//= $value['click']?><!--次</p></div>-->                                            </div>                                        </div>                                        <div class="getiao section20"></div>                                    </li>                                <?php else:?>                                <li class="section10">                                    <div class="item">                                        <div class="title_time">                                            <div class="title"><a class="line-over1" href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                            <div class="time"><?= date('Y-m-d',$value['create_time']) ?></div>                                        </div>                                    </div>                                </li>                                <?php endif;?>                            <?php endforeach;?>                        </ul>                    </div>                </div>        <?php endforeach;?>        </section>    </div>    <?php $this->beginContent('@app/views/layouts/public/ad_getiao.php'); ?>    <?php $this->endContent(); ?>    <?php $this->beginContent('@app/views/layouts/public/jingxuan.php'); ?>    <?php $this->endContent(); ?>    <?php $this->beginContent('@app/views/layouts/public/keywords.php'); ?>    <?php $this->endContent(); ?></div><?php \frontend\assets\NewsAsset::register($this); ?><?php $this->beginBlock('test'); ?>    new ImageSlide({    project:"#focusImage",    content:".contents li",    tigger:".triggers a",    dot:".icon-dot a",    watch:".link-watch",    auto:!0,    hide:!0    })<?php $this->endBlock() ?>    <!-- 将数据块 注入到视图中的某个位置 --><?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>