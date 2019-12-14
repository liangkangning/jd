<?php $this->registerJsFile('@web/assets/js/jquery.nav.js',['depends'=>['frontend\assets\LayoutAsset']]);?>

    <div class="special">



        <section class="container">



            <div class="banner">



                <div class="list_img">



                    <div class="img">



                        <div class="example">



                            <div class="ft-carousel" id="carousel_1">



                                <ul class="carousel-inner">







                                    <?php foreach (\common\helpers\AdHelper::GetAd_list('special') as $key=>$value):?>



                                        <li class="carousel-item"> <a href="<?=$value->url?>"><img src="<?=$value->imageUrl?>" alt="<?=$value->title?>" title="<?=$value->title?>"/></a></li>



                                    <?php endforeach; ?>











                                </ul>



                            </div>



                        </div>











                    </div>



                    <div class="text">



                        <div class="kouhao">



                            <ul>



                                <li class="">



                                    <div class="item">



                                        <p><img src="<?=Yii::getAlias('@web/static/images/kouhao1.png')?>"/>按需开发     </p>



                                    </div>



                                </li>



                                <li class="bj">



                                    <div class="item">



                                        <p><img src="<?=Yii::getAlias('@web/static/images/kouhao2.png')?>"/>8小时响应     </p>



                                    </div>



                                </li>



                                <li class="bj">



                                    <div class="item">



                                        <p><img src="<?=Yii::getAlias('@web/static/images/kouhao3.png')?>"/>24小时上门     </p>



                                    </div>



                                </li>



                                <li class="bj">



                                    <div class="item">



                                        <p><img src="<?=Yii::getAlias('@web/static/images/kouhao4.png')?>"/>十年维护</p>



                                    </div>



                                </li>



                                <li class="end bj">



                                    <div class="item">



                                        <p><strong>免费</strong> 提供一对一锂电池定制设计方案 <span><a id="qiao" href="http://ddt.zoosnet.net/LR/Chatpre.aspx?id=DDT94811403&lng=cn" rel="nofollow" target="_blank">立即定制</a></span></p>



                                    </div>



                                </li>



                            </ul>







                        </div>



                    </div>







                </div>











            </div>



        </section>







        <section class="container section">



            <div class="new_p">



                <div class="top">



                    <div class="title">



                        <h2>最新电池</h2>



                    </div>



                    <div class="more"><a href="">更多</a></div>



                </div>



                <div class="content">



                    <div class="img hidden-sm"><a href=""><img src="<?=Yii::getAlias('@web/static/images/special_new_p.jpg')?>" alt="最新电池" title="最新电池" /></a></div>



                    <div class="p_list">



                        <ul>



                            <?php foreach ($data['new_product_list'] as $key=>$value):?>



                                <li class="col-md-4 col-sm-6">



                                    <div class="item">



                                        <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>



                                        <div class="text">



                                            <p>



                                                <a href="<?=$value->url ?>" title="<?=$value->title?>"><?= $value['title']?></a></p>







                                        </div>



                                    </div>



                                </li>



                            <?php endforeach?>







                        </ul>



                    </div>



                </div>



            </div>



        </section>







        <section class="container section" id="sp_diwen">



            <div class="list_ca">



                <div class="top">



                    <div class="title">



                        <h2><a href="/diwen/">低温锂电池</a></h2>



                    </div>



                    <div class="more"><a href="/diwen/">更多</a></div>



                </div>



                <div class="content">



                    <ul>



                        <li class="w40 hidden-sm">



                            <div class="item">



                                <div class="img_banner"><a href="/diwen/"><img src="<?=Yii::getAlias('@web/static/images/tz_diwen.jpg')?>" alt="低温锂电池" title="低温锂电池" /></a></div>



                            </div>



                        </li>



                        <li class="w20 col-sm-4">



                            <div class="item text_de">



                                <div class="p">



                                    <div class="p_title"><a href="/diwen/">低温锂电池</a></div>



                                    <p>是指工作温度在-20℃以下，<br>



                                        同时可满足锂离子电池<br>



                                        国标GB31241-2014<br>



                                        或者中华人民共和国国家<br>



                                        军用标准GJB4477-2002<br>



                                        要求的锂离子电池。</p>



                                </div>



                            </div>



                        </li>



                        <?php foreach ($data['diwen_list'] as $key=>$value):?>



                            <li class="w20 col-sm-4">



                                <div class="item">



                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>



                                    <div class="text">



                                        <p>



                                            <a href="<?=$value->url ?>" title="<?=$value->title?>"><?= $value['title']?></a></p>







                                    </div>



                                </div>



                            </li>



                        <?php endforeach?>











                    </ul>



                </div>







            </div>



        </section>



        <section class="container section kuanwen" id="sp_kuanwen">



            <div class="list_ca">



                <div class="top">



                    <div class="title">



                        <h2><a href="/kuanwen/">宽温锂电池</a></h2>



                    </div>



                    <div class="more"><a href="/kuanwen/">更多</a></div>



                </div>



                <div class="content">



                    <ul>



                        <li class="w40 hidden-sm">



                            <div class="item">



                                <div class="img_banner"><a href="/kuanwen/"><img src="<?=Yii::getAlias('@web/static/images/tz_kuanwen.jpg')?>" alt="宽温锂电池" title="宽温锂电池" /></a></div>



                            </div>



                        </li>



                        <li class="w20 col-sm-4">



                            <div class="item text_de">



                                <div class="p">



                                    <div class="p_title"><a href="/kuanwen/">宽温锂电池</a></div>



                                    <p>



                                        是指工作温度范围<br>



                                        -50℃~70℃的锂离子电池，<br>



                                        电池内阻低、放电倍率高、<br>



                                        放电平台稳定； <br>



                                        具有容量高、自放电低、<br>



                                        长循环、寿命长等特点<br>











                                    </p>



                                </div>



                            </div>



                        </li>



                        <?php foreach ($data['kuanwen_list'] as $key=>$value):?>



                            <li class="w20 col-sm-4">



                                <div class="item">



                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>



                                    <div class="text">



                                        <p>



                                            <a href="<?=$value->url ?>" title="<?=$value->title?>"><?= $value['title']?></a></p>







                                    </div>



                                </div>



                            </li>



                        <?php endforeach?>



                    </ul>



                </div>







            </div>



        </section>



        <section class="container section taisuanli" id="sp_taisuanli">



            <div class="list_ca">



                <div class="top">



                    <div class="title">



                        <h2><a href="/taisuanli/">钛酸锂电池</a></h2>



                    </div>



                    <div class="more"><a href="/taisuanli/">更多</a></div>



                </div>



                <div class="content">



                    <ul>



                        <li class="w40 hidden-sm">



                            <div class="item">



                                <div class="img_banner"><a href="/taisuanli/"><img src="<?=Yii::getAlias('@web/static/images/taisuanli.jpg')?>" alt="钛酸锂电池" title="钛酸锂电池" /></a></div>



                            </div>



                        </li>



                        <li class="w20 col-sm-4">



                            <div class="item text_de">



                                <div class="p">



                                    <div class="p_title"><a href="/taisuanli/">钛酸锂电池</a> </div>



                                    <p>



                                        是以钛酸锂作为负极材料，<br>



                                        锰酸锂、<br>



                                        三元材料或磷酸铁锂等<br>



                                        正极材料组成2.4V或1.9V的<br>



                                        锂离子二次电池。



                                    </p>



                                </div>



                            </div>



                        </li>



                        <?php foreach ($data['taisuanli_list'] as $key=>$value):?>



                            <li class="w20 col-sm-4">



                                <div class="item">



                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>



                                    <div class="text">



                                        <p>



                                            <a href="<?=$value->url ?>" title="<?=$value->title?>"><?= $value['title']?></a></p>







                                    </div>



                                </div>



                            </li>



                        <?php endforeach?>







                    </ul>



                </div>







            </div>



        </section>



        <section class="container section fangbao" id="sp_fangbao">



            <div class="list_ca">



                <div class="top">



                    <div class="title">



                        <h2><a href="/fanbao/">防爆锂电池</a></h2>



                    </div>



                    <div class="more"><a href="/fanbao/">更多</a></div>



                </div>



                <div class="content">



                    <ul>



                        <li class="w40 hidden-sm">



                            <div class="item">



                                <div class="img_banner"><a href="/fanbao/"><img src="<?=Yii::getAlias('@web/static/images/fangbao.jpg')?>" alt="防爆锂电池" title="防爆锂电池" /></a></div>



                            </div>



                        </li>



                        <li class="w20 col-sm-4">



                            <div class="item text_de">



                                <div class="p">



                                    <div class="p_title"><a href="/fanbao/">防爆锂电池</a> </div>



                                    <p>



                                        防爆锂电池是一种新型的<br />



                                        锂电池产品，<br />



                                        采用高安全系数材料制造，<br />



                                        有效遏制电池爆炸的安全电池。<br />



                                        防爆锂电池的安全特性<br />



                                        是其最大的特点。



                                    </p>



                                </div>



                            </div>



                        </li>



                        <?php foreach ($data['fanbao_list'] as $key=>$value):?>



                            <li class="w20 col-sm-4">



                                <div class="item">



                                    <div class="img"><a href="<?=$value->url ?>"><img src="<?=$value->imageUrl?>" alt="<?=$value['title']?>" /></a></div>



                                    <div class="text">



                                        <p>



                                            <a href="<?=$value->url ?>" title="<?=$value->title?>"><?= $value['title']?></a></p>







                                    </div>



                                </div>



                            </li>



                        <?php endforeach?>







                    </ul>



                </div>







            </div>



        </section>



        <div class="default_stairs_w" id="JS_default_stairs" style="transform: scale(1.2); opacity: 0;">



            <div class="w">



                <div class="left_nav">



                    <ul>



                        <li>



                            <a href="#sp_diwen">低温电池</a>



                        </li>



                        <li>



                            <a href="#sp_kuanwen">宽温



                                电池</a>



                        </li>



                        <li>



                            <a href="#sp_taisuanli">钛酸



                                电池     </a>



                        </li>



                        <li>



                            <a href="#sp_fangbao">防爆



                                电池</a>



                        </li>



                    </ul>



                </div>



            </div>



        </div>











    </div>









<?php $this->beginBlock('test') ?>

    $(document).ready(function() {



    stairs_move();







    });



    function stairs_show() {







    }



    function stairs_move() {



    var e = $("#JS_default_stairs"),



    t = e.find("a");



    $(window).on("scroll",



    function() {



    var s = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;



    e.removeClass("out"),



    s >= 600 ? ( - [1] ? e.css({



    transform: "scale(1)",



    opacity: 1



    }) : e.show(), e.find(".stairs-cover").addClass("none"), stairs_show()) : ( - [1] ? e.css({



    transform: "scale(1.2)",



    opacity: 0



    }) : e.hide(), e.find(".stairs-cover").removeClass("none"));



    $('.left_nav').onePageNav();







    })



    }

<?php $this->endBlock() ?>

<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>