<?phpuse yii\helpers\Html;use yii\helpers\Url;$this->beginPage();$cid = \common\models\Article::find()->where(['id' => Yii::$app->request->get('id')])->select('category_id')->one();$zhuanti = $cid['category_id'] == 36 ?true: false;//公司新闻，电池专题和案例详情不用加，其它的都加上$self_cid = $cid['category_id'];$cids = \common\models\Category::find()->where(['pid' => 28])->column();//案例分类$ids = ['35','36','28'];$arr = array_merge($cids, $ids);$shengming = in_array($self_cid,$arr)?false:true;?><div class="news_detail_2020">    <div class="main_content">        <div class="container">            <div class="top_crumbs">                <?php $this->beginContent('@app/views/layouts/public/breadcrumbs.php') ?>                <?php $this->endContent() ?>            </div>            <div class="news_index_banner">                <div class="swiper-container">                    <div class="swiper-wrapper">                        <?php foreach (\common\helpers\AdHelper::GetAd_list('news_detail') as $key => $value): ?>                            <div class="swiper-slide"><div class="item"><a href="<?= $value->url ?>"><img src="<?= $value->imageUrl ?>" alt="<?= $value->title ?>" title="<?= $value->title ?>"/></a></div></div>                        <?php endforeach; ?>                    </div>                    <!-- Add Pagination -->                    <div class="swiper-pagination"></div>                </div>            </div>            <section class="title_part">                <div class="title"><h1 class="size1-9p"><?= $data['detail']['title']?></h1></div>                <div class="text">                    <p class="size6-4p">                        <span>钜大LARGE</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span>点击量：<?=$data['detail']['click']?>次</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="time"><?= date('Y年m月d日',$data['detail']['create_time']); ?></span>&nbsp;&nbsp;                    </p>                </div>            </section>            <section class="section60">                <?php if (strlen($data['detail']['name'])==0 && !Yii::$app->params['isAllowedIp']): ?>                    <div class="zaiyao col-md-12 <?=$zhuanti?'':'none';?>">                        <div class="img col-md-4"><img src="<?= $data['detail']['imageUrl']; ?>" alt=""></div>                        <div class="text col-md-8">                            <div class="tig size4-6p">摘要</div>                            <div class="p size6-4p section10"><?= $data['detail']['description']; ?></div>                        </div>                    </div>                <?php endif;?>                <div class="content col-md-12">                    <div class=" main <?=$zhuanti&&!Yii::$app->params['zhuti-display']?'zhaunti_main':'';?>">                        <div class="all col-md-12">                            <?php if (strlen($data['detail']['name'])>0 && Yii::$app->params['isAllowedIp']): ?>                                <?php $template = "@app/views/column/" . $data['detail']['name'] . ".php"?>                                <?php $this->beginContent($template)?>                                <?php $this->endContent() ?>                            <?php else:?>                                <?= $data['detail']['content']; ?>                            <?php endif;?>                        </div>                        <?php if ($shengming): ?>                        <div class="from col-md-12 section50"><p></p></div>                        <?php endif;?>                    </div>                    <div class="hide-article-box <?=$zhuanti&&!Yii::$app->params['zhuti-display']?'':'none';?>"><a>点击阅读更多 v</a></div>                </div>            </section>            <section class="before_next section40">                <div class="fengx col-md-6">                    <div class="before"><p>上一篇：<a href="<?=$data['prev_article']['url']?>"><?=$data['prev_article']['title']?></a></p></div>                </div>                <div class="next_before  col-md-6">                    <div class="next text-right"><p>下一篇：<a href="<?=$data['next_article']['url']?>"><?=$data['next_article']['title']?></a></p></div>                </div>            </section>        </div>    </div>    <?php $this->beginContent('@app/views/layouts/public/ad_getiao.php'); ?>    <?php $this->endContent(); ?>    <div class="xiangguan_tuijian container new_index_2020">        <section class=" left_right">            <?php foreach (Yii::$app->params['xiangguan_tuijian'] as $key=>$value):?>                <div class="common_seciton col-md-6 part section70">                    <div class="top">                        <div class="nav_title border_bottom_line"><h2><a href="<?= $value['category']['url']?>"><?= $value['category']['title']?></a></h2></div>                        <div class="more none"><a href="<?= $value['category']['url']?>">更多</a></div>                    </div>                    <div class="list ">                        <ul class="section20">                            <?php foreach ($value['news'] as $key=>$value):?>                                <?php if ($key==0): ?>                                    <li class="section5">                                        <div class="item">                                            <div class="img"><a href="<?= $value['url']?>"><img src="<?= $value['ico']?>" alt="<?= $value['title']?>" title="<?= $value['title']?>"></a></div>                                            <div class="text">                                                <div class="title line-over1"><a href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                                <div class="des line-over3"><p><?= $value['description']?></p></div>                                                <!--                                        <div class="click"><p>点数量：--><?//= $value['click']?><!--次</p></div>-->                                            </div>                                        </div>                                        <div class="getiao section20"></div>                                    </li>                                <?php else:?>                                     <?php if ($key<=5): ?>                                        <li class="section5">                                            <div class="item">                                                <div class="title_time">                                                    <div class="title"><a class="line-over1" href="<?= $value['url']?>" title="<?= $value['title']?>"><?= $value['title']?></a></div>                                                    <div class="time"><?= date('Y-m-d',$value['create_time']) ?></div>                                                </div>                                            </div>                                        </li>                                    <?php endif;?>                                <?php endif;?>                            <?php endforeach;?>                        </ul>                    </div>                </div>            <?php endforeach;?>        </section>    </div>    <section class="section80 container">        <?php $this->beginContent('@app/views/layouts/public/xiangguan_product.php'); ?>        <?php $this->endContent(); ?>    </section>    <?php $this->beginContent('@app/views/layouts/public/jingxuan.php'); ?>    <?php $this->endContent(); ?>    <?php $this->beginContent('@app/views/layouts/public/hexin_jishu.php'); ?>    <?php $this->endContent(); ?>    <?php $this->beginContent('@app/views/layouts/public/keywords.php') ?>    <?php $this->endContent() ?>    <?php $this->beginContent('@app/views/layouts/public/news-list.php') ?>    <?php $this->endContent() ?></div><?php \frontend\assets\NewsAsset::register($this); ?>