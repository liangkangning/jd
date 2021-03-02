<div class="product_detail">
    <div class="photo">
        <div class="title"><h1><?=$item->title?></h1></div>
        <div  class="page wrapper main-wrapper img">
            <div class="row clearfix">
                <div id="page-navigation" class="col span_6">
                    <div class="left page-nav-item"></div>
                    <div class="right page-nav-item"></div>
                </div>
            </div>
        </div>
        <div class="product_mip">
                <mip-carousel
                    autoplay
                    defer="2000"
                    width="360"
                    height="300">
                    <?php foreach ($item->imagesUrl as $key=>$value): ?>
                            <mip-img
                                src="<?=$value ?>">
                            </mip-img>
                    <?php endforeach; ?>
                </mip-carousel>
</div>
    </div>
    <div class="content commom_padding_l_r">
        <div class="content">
            <p><?= \common\helpers\Html::decode_mip(str_replace('www.','m.',$item->content)); ?></p>
        </div>
    </div>
    <div class="getiao"></div>
    <div class="news_detail_nav_list ">
        <div class="title "><h2 class="commom_padding_l_r">推荐品类</h2></div>
        <ul class="commom_padding_l_r">
            <li class="col-sm-4 col-xs-4">            <div class="item"><a href="/lilizi/list-82.html">特种锂电池</a></div></li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/diwen/">低温锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/fanbao/">防爆锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/dongli/">动力锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/chuneng/">储能锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/libattery/">18650锂电池  </a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-11.html">12V锂电池 </a></div></li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-12.html">24V锂电池 </a></div></li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-13.html">36V锂电池 </a></div> </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/list-14.html">48V锂电池</a></div></li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lilizi/">锂离子电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/taisuanli/">钛酸锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/kuanwen/">宽温锂电池</a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/juhewu/">聚合物锂电池 </a></div>        </li>
            <li class="col-sm-4 col-xs-4"> <div class="item"><a href="/lifepo4/">磷酸铁锂电池  </a></div>        </li>
        </ul>
    </div>
    <div class="common">
        <div class="ad">
            <div class="img">
                <a id="qiao" href="http://p.qiao.baidu.com/cps/chat?siteId=4576215&userId=2111997" target="_blank" rel="nofollow"><mip-img src="<?=Yii::getAlias('@web/static/mobil_images/product_ad.jpg')?>"/></a>
            </div>
        </div>
    </div>
    <div class="product_tuijian">
        <div class="title"><h2 class="commom_padding_l_r">为您推荐</h2></div>
        <div class="list">
            <ul>
                <?php foreach (\common\helpers\ProductHelper::GetListRand(4) as $key=>$value):?>
                    <li class="col-sm-6 col-xs-6"><div class="item">
                            <div class="img"><a href="<?=$value['url']?>"><mip-img src="<?=$value['imageUrl']?>" alt="<?=$value['title']?>" title="<?=$value['title']?>"></a></div>
                            <div class="text"><a href="<?=$value['url']?>" title="<?=$value['title']?>"><?=$value['title']?></a></div>
                        </div></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
