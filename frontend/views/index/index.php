<?php
$listUrl = '/product/detail?id=';
use \yii\helpers\Html;
?>

<div class="index">
    <div class="banner">
        <!-- Swiper -->
        <div class="index-banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach (\common\helpers\AdHelper::GetAd_list('index') as $key => $value): ?>
                    <div class="swiper-slide"><div class="item"><a href="<?= $value->url ?>"><img src="<?= $value->imageUrl ?>" alt="<?= $value->title ?>" title="<?= $value->title ?>"/></a></div></div>
                    <?php endforeach; ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>
    </div>

    <section class="section container index-tezhong">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>特种电芯</h2></div>
        </div>
        <div class="index-nav-min nav-list section80">
            <ul>
                <li class=""><div class="item"><a href="/diwen18650/">低温18650电芯</a></div></li>
                <li class=""><div class="item"><a href="/diwenlipo/">低温聚合物电芯</a></div></li>
                <li class=""><div class="item"><a href="/tz26650/">特种26650电芯</a></div></li>
                <li class=""><div class="item"><a href="/fangbaocell/">防爆电芯</a></div></li>
            </ul>
        </div>
        <div class="nav-product-list section">
            <?php foreach (Yii::$app->params['index-tzcell'] as $key=>$value):?>
                <div class="list product_common <?= $key>0?'none':'' ?>">
                    <ul>
                        <?php foreach ($value as $k=>$v):?>
                            <li class="col-md-3">
                                <div class="item">
                                    <div class="img"><a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a></div>
                                    <div class="title"><a href="<?= $v['url']?>"><?= $v['h1']?></a></div>
                                    <div class="sub_title"><a href="<?= $v['url']?>"><?= $v['h2']?></a></div>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endforeach;?>
        </div>
    </section>

    <section class="section container index-tezhong">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>特种锂电池</h2></div>
        </div>
        <div class="index-nav-min nav-list section80">
            <ul>
                <li class=""><div class="item"><a href="/diwen/">低温锂电池</a></div></li>
                <li class=""><div class="item"><a href="/kuanwen/">宽温锂电池</a></div></li>
                <li class=""><div class="item"><a href="/taisuanli/">钛酸锂电池</a></div></li>
                <li class=""><div class="item"><a href="/fanbao/">防爆锂电池</a></div></li>
            </ul>
        </div>
        <div class="nav-product-list section">
            <?php foreach (Yii::$app->params['index-tezhong'] as $key=>$value):?>
            <div class="list product_common <?= $key>0?'none':'' ?>">
                <ul>
                    <?php foreach ($value as $k=>$v):?>
                    <li class="col-md-3">
                        <div class="item">
                            <div class="img"><a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a></div>
                            <div class="title"><a href="<?= $v['url']?>"><?= $v['h1']?></a></div>
                            <div class="sub_title"><a href="<?= $v['url']?>"><?= $v['h2']?></a></div>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <?php endforeach;?>
        </div>
    </section>

    <section class="section container index-gongye">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>工业锂电池</h2></div>
        </div>
        <div class="index-nav-min nav-list section80">
            <ul>
                <li class=""><div class="item"><a href="/libattery/">18650锂电池</a></div></li>
                <li class=""><div class="item"><a href="/juhewu/">聚合物锂电池</a></div></li>
                <li class=""><div class="item"><a href="/chuneng/">储能锂电池</a></div></li>
                <li class=""><div class="item"><a href="/lilizi/">锂离子电池</a></div></li>
                <li class=""><div class="item"><a href="/lifepo4/">磷酸铁锂电池</a></div></li>
                <li class=""><div class="item"><a href="/dongli/">动力锂电池</a></div></li>
            </ul>
        </div>
        <div class="nav-product-list section">
            <?php foreach (Yii::$app->params['index-gongye'] as $key=>$value):?>
                <div class="list product_common <?= $key>0?'none':'' ?>">
                    <ul>
                        <?php foreach ($value as $k=>$v):?>
                            <li class="col-md-3">
                                <div class="item">
                                    <div class="img"><a href="<?= $v['url']?>"><img src="<?= $v['imageUrl']?>" alt="<?= $v['title']?>" title="<?= $v['title']?>"></a></div>
                                    <div class="title"><a href="<?= $v['url']?>"><?= $v['h1']?></a></div>
                                    <div class="sub_title"><a href="<?= $v['url']?>"><?= $v['h2']?></a></div>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            <?php endforeach;?>
        </div>
    </section>

    <?php $this->beginContent('@app/views/layouts/public/ad_getiao.php'); ?>
    <?php $this->endContent(); ?>


    <?php
    $yingyong = [["title"=>"特种设备","url"=>"/lilizi/list-82.html"],
        ["title"=>"航空航天","url"=>  "/lilizi/list-84.html"],
        ["title"=>"舰艇船舶","url"=>  "/lilizi/list-83.html"],
        ["title"=>"极地科考","url"=>  "/diwen/"],
        ["title"=>"医疗设备","url"=>  "/lilizi/list-88.html"],
        ["title"=>"安防通讯","url"=>  "/lilizi/list-90.html"],
        ]
    ?>
    <section class="section container index_yingyong">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>应用领域</h2></div>
        </div>
        <div class="list section40">
            <ul>
                <?php foreach ($yingyong as $k=>$v):?>
                    <li class="col-md-4">
                        <div class="item">
                            <div class="img"><a href="<?=$v['url']?>"><img src="/assets/images/index_yinyong_<?=$k+1?>.jpg" alt="<?=$v['title']?>" title="<?=$v['title']?>"></a></div>
                            <div class="text">
                                <div class="ico"><a href="<?=$v['url']?>"><img src="/assets/images/index_yinyong_ico_<?=$k+1?>.png" alt="<?=$v['title']?>"></a></div>
                                <div class="a size4-6p"><a href="<?=$v['url']?>"><?=$v['title']?></a></div>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>

    </section>


    <section class="section container index-kehu">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>我们的客户</h2></div>
        </div>
        <div class="img section"><img src="/assets/images/index_kehu.jpg" alt=""></div>
    </section>



    <section class="section shili">
        <div class="container">
            <div class="tabswitch-title">
                <div class="longline"></div>
                <div class="tabswitch-title-info"><h2>钜大综合实力</h2></div>
            </div>
            <div class="text-center">
                <p class="size5-5p section50">东莞市钜大电子有限公司成立于2002年，是一家为全球用户提供</p>
                <p class="size2-8p section10">超可靠·超安全的特种锂电池系统定制化方案和产品</p>
                <p class="size5-5p section10">的国家级高新技术企业。</p>
            </div>
        </div>
        <div class="shuzi section50">
            <div class="text  container">
                <ul>
                    <li><div class="num"><div class="numberRun"></div><div class="tig year">年</div></div><div class="p">专注锂电池定制</div></li>
                    <li><div class="num"><div class="numberRun2"></div><div class="tig">+</div></div><div class="p">国家专利</div></li>
                    <li><div class="num"><div class="numberRun3"></div><div class="tig">+</div></div><div class="p">成功定制案例</div></li>
                    <li><div class="num"><div class="numberRun4"></div><div class="tig">+</div></div><div class="p">锂电模组的成功交付</div></li>

                </ul>

            </div>
        </div>
    </section>

    <?php $this->beginContent('@app/views/layouts/public/hexin_jishu.php') ?>
    <?php $this->endContent() ?>

    <section class="section container team">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>专家团队</h2></div>
        </div>
        <div class="title section50">
            <p class="size2-8p">特种锂离子电池工程研究院</p>
            <p class="size5-5p">教授专家<span>9</span>人，副教授专家<span>2</span>人，中高级职称工程师<span>12</span>人</p>
        </div>
        <div class="list section40">
            <ul>
                <?php foreach (Yii::$app->params['yanfa_team'] as $key=>$value):?>
                <li class="col-md-4">
                    <div class="item relative">
                        <div class="to_black">
                            <div class="img"><img src="<?= $value['imageUrl'] ?>" alt="<?= $value['title'] ?>" title="<?= $value['title'] ?>"></div>
                            <div class="text">
                                <div class="name"><?= $value['title'] ?></div>
                                <div class="title"><?= $value['sub_title'] ?></div>
                                <div class="p"><p><?= $value['description'] ?></p></div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>

            </ul>
        </div>
    </section>

    <section class="section index-shiyanshi">
        <div class="">
            <div class="tabswitch-title container">
                <div class="longline"></div>
                <div class="tabswitch-title-info"><h2>八大实验室</h2></div>
            </div>
            <div class="shiyanshi-des container section40">
                <p class="lh_2 size5-5p text-center">
                    钜大拥有8大实验室，其中3个专业实验室分别是 <span class="size3-7p">光伏储能实验室、光伏电能变换实验室、光伏云监控实验室</span><br>
                    5个工程实验室，包括理化实验室、电子结构实验室、安全测试实验室、环境仿真实验室、电性能实验室<br>
                    配备了先进的检测设备和仪器，能够自主完成原/辅材料、零配件和电池模组的全项目测试认证，检测技术达到国际标准

                </p>
            </div>
            <div class="swiper-shiyanshi">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach (Yii::$app->params['shiyanshi_list'] as $key=>$value):?>
                            <div class="swiper-slide <?=$key==0?'swiper-slide-center none-effect':''?>">
                                <div class="content">
                                    <a href="javascript:void(0)">
                                        <img src="<?=$value['imageUrl']?>" about="<?=$value['title']?>" title="<?=$value['title']?>">
                                    </a>
                                    <div class="bottom_text">
                                        <div class="title"><?=$value['title']?></div>
                                        <div class="p"><?=$value['text']?></div>
                                    </div>
                                </div>
                                <div class="layer-mask"></div>
                            </div>
                        <?php endforeach;?>

                    </div>
                    <div class="button">
                        <div class="swiper-button-prev swiper-button-white"></div>
                        <div class="swiper-button-next swiper-button-white"></div>
                    </div>
                </div>


            </div>
        </div>


    </section>

    <section class="section video_index">
        <div class="content container">
            <div class="text-center">
                <div class="title size1-9p"><h2>品牌故事</h2></div>
                <div class="p size5-5p section45">
                    十八年来，我们一直专注锂电池定制。因为专注，所以专业。<br>
                    公司累计完成5000+成功案例，超过1亿套锂电模组交付。钜大相信，一定能给您带来"超可靠·超安全"的品质服务。
                </div>
            </div>
            <div class="video section40">
                <video width="1200" height="675" controls="controls" poster="/assets/images/video_pic.jpg"  id="video" muted loop="loop">
                    <source src="http://images.juda.cn/image/video/slogan.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    您的浏览器不支持Video标签。
                </video>
            </div>
        </div>
    </section>

    <section class="section container news">
        <div class="tabswitch-title">
            <div class="longline"></div>
            <div class="tabswitch-title-info"><h2>资讯中心</h2></div>
        </div>
        <div class="list section">
            <div class="left">
                <div class="img"><a href="<?= Yii::$app->params['index_tetui']['url'] ?>"><img src="<?= Yii::$app->params['index_tetui']['imageUrl'] ?>" alt="<?= Yii::$app->params['index_tetui']['title']?>"></a></div>
                <div class="text section50">
                    <div class="title"><a href="<?= Yii::$app->params['index_tetui']['url'] ?>"><?= Yii::$app->params['index_tetui']['title']?></a></div>
                    <div class="p"><p><?= Yii::$app->params['index_tetui']['description'] ?></p></div>
                    <div class="line"><span>1</span></div>
                </div>
            </div>
            <div class="right">
                <div class="nav_news nav-list">
                    <ul>
                        <li class="col-md-3" ><a href="/news/gongsixinwen.html">公司新闻</a></li>
                        <li class="col-md-3" ><a href="/news/hangyezixun.html">行业资讯</a></li>
                        <li class="col-md-3" ><a href="/news/zhuanti.html">电池专题</a></li>
                        <li class="col-md-3" ><a href="/news/changjianwenti.html">电池知识</a></li>
                    </ul>
                </div>
                <div class="news_item section30">
                    <?php foreach (Yii::$app->params['index-news'] as $key=>$value):?>
                    <ul class="<?= $key>0?'none':'' ?>">
                        <?php foreach ($value as $k=>$v):?>
                        <li>
                            <div class="text">
                                <div class="title"><a href="<?=$v['url'] ?>" title="<?=$v['title'] ?>"><?=$v['title'] ?></a></div>
                                <div class="p"><p><?=$v['description'] ?></p></div>
                                <div class="line"><span>1</span></div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <section class="section container location_tel">
        <ul>
            <li class="col-md-4">
                <div class="item">
                    <div class="ico"><a href="http://j.map.baidu.com/R7jAL" target="_blank" rel="nofollow"><img src="/assets/images/index_bottom_ico_1.png" alt="查看位置"></a></div>
                    <div class="title "><a href="http://j.map.baidu.com/R7jAL" class="size6-4p color_b1" target="_blank" rel="nofollow">查看位置</a></div>
                    <div class="text"><p>广东省东莞市东城街道景怡路8号</p></div>
                </div>
            </li>
            <li class="col-md-4">
                <div class="item">
                    <div class="ico"><img src="/assets/images/index_bottom_ico_2.png" alt=""></div>
                    <div class="title "><span     class="size6-4p color_b1">联系我们</span></div>
                    <div class="text"><p>
                            <span class="size2-8p color_y lh_1">400-666-3615</span><br>
                            或0769-26983348
                        </p></div>
                </div>
            </li>
            <li class="col-md-4 relative">
                <div class="item">
                    <div class="top">
                        <div class="ico"><img src="/assets/images/index_bottom_ico_3.png" alt=""></div>
                        <div class="title "><span  class="size6-4p color_b1">移动网站</span></div>
                    </div>
                    <div class="share">
                        <ul>
                            <div class="bdsharebuttonbox">
                                <dd class="col-md-3"><div class="ico"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></div></dd>
                                <dd class="col-md-3"><div class="ico"><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div></dd>

                                <dd class="col-md-3"><div class="ico"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div></dd>
                                <dd class="col-md-3"><div class="ico"><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div></dd>

                            </div>
                            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                        </ul>
                    </div>
                    <div class="erweima"><img src="/assets/images/index_share_wx.png" alt=""></div>
                </div>
            </li>
        </ul>
    </section>
</div>

<?php \frontend\assets\IndexAsset::register($this); ?>
