<?php
/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;

use yii\helpers\Url;


?>



    <html lang="en">



    <!-- BEGIN HEAD -->



    <head>



        <meta charset="utf-8" />

        <meta name="viewport" content="">
        <meta content="yes" name="apple-mobile-web-app-capable">

        <meta content="black" name="apple-mobile-web-app-status-bar-style">

        <meta content="telephone=no" name="format-detection">

        <title><?=$this->params['meta_title']?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="keywords" content="<?=$this->params['keywords']?>">

        <meta content="<?=$this->params['description']?>" name="description" />



        <link href="https://m.jianke.com/dist/common.b23df29efc3c4b8fca47.css" rel="stylesheet">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->



        <?php $this->head() ?>



        <!-- END THEME LAYOUT STYLES -->


        <link rel="shortcut icon" href="/favicon.ico" />



    </head>



    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md">
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->


    <?php if (Yii::$app->params['controllerName']=='index'): ?>
        <header class=" head_index" id="nav_bar">
            <div class="content commom_padding_l_r">
            <section >
                <div class="logo">
                    <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/mobil_images/logo.png')?>" alt="钜大锂电超可靠超安全" title="钜大锂电超可靠超安全" /></a></div>
                </div>
                <div class="header_right">
                    <div class="img"><a href="/search/"><img src="<?=Yii::getAlias('@web/static/mobil_images/search.png')?>" alt="搜索" title="搜索"/></a></div>
                </div>
            </section>
            </div>
        </header>
    <?php else:?>
        <header class="commom_padding_l_r head_back" id="nav_bar">
            <section >
                <div class="back" id="goBack">
                    <a rel="nofollow" class="back-btn common-header-btn" style="display:;" data-v-01ba7424="">
                        <i class="icon iconfont icon-back" data-v-01ba7424=""></i>
                    </a>
                </div>
                <div class="logo">
                    <div class="img"><a href="/"><img src="<?=Yii::getAlias('@web/static/mobil_images/logo1.png')?>" alt="钜大锂电超可靠超安全" title="钜大锂电超可靠超安全" /></a></div>
                </div>
                <div class="header_right">
                    <div class="img"><a href="/search/"><img src="<?=Yii::getAlias('@web/static/mobil_images/search1.png')?>" alt="搜索" title="搜索"/></a></div>
                </div>
            </section>
        </header>
    <?php endif;?>

    <?=$content?>



    <!-- BEGIN FOOTER -->
    <?php \frontend\assets\MobilAsset::register($this); ?>
    <?php $this->endBody() ?>


    <?php $this->beginContent('@app/mobil/layouts/public/footer.php') ?>

    <?php $this->endContent() ?>

    <script type="text/javascript">
        $(function(){

//            返回上一页
            var u = navigator.userAgent;
            var goBack=document.getElementById("goBack");
            if(goBack!=null){
                //针对ios原生浏览器处理
                if(!!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) && /(Safari)/i.test(u)){
                    goBack.setAttribute("onclick","javascript:window.location=document.referrer;");
                }

//            产品分类列表，现实已选
                $url=window.location.pathname;
                $("#product .common_nav li a").each(function(){
                    $src=$(this).attr("href");
                    if($url==$src){
                        $(this).parent().addClass("checked")
                    }

                });
            }



        //        尾部高度
//        $(".foot_height").height($(".foot_nav").height());

        //关于我们的公司历程
        $(".licheng li").each(function(){
            var h=$(this).find(".right").innerHeight()+30;
            $(this).height(h)
        });
        //定制案例文本居中
            $(".case_list .list .text").each(function(){
                $h=($(".case_list .list .img").height()-$(this).height())/2;
                $(this).css("padding-top",$h);
            });




        //产品显示方式
        $(".attr_more").click( function () {

            if($(this).attr("data")=="one"){
                $(".p_list ul").removeClass("w100");
                $(".p_list ul").addClass("w50")
                $(this).attr("data","two")
                $(".w50 .item .text").css("margin-top","0px");
            }else{
                $(".p_list ul").removeClass("w50");
                $(".p_list ul").addClass("w100")
                $(this).attr("data","one")
                $h=($(".w100 .item .img").height()-$(".w100 .item .text a").height())/2;
                $(".w100 .item .text").css("margin-top",$h);


            }
        });
        $h=($(".w100 .item .img").height()-$(".w100 .item .text a").height())/2;
        $(".w100 .item .text").css("margin-top",$h);

        //属性选择
        $(".attr_nav li").click( function () {

            if($(this).hasClass("clicked")){
                $(".attr_list").addClass("none");
                $(this).removeClass("clicked");

            }else{
                $data=$(this).attr("data");
                $(".attr_list").removeClass("none");
                $(".attr_list li").each(function(i){
                    $(this).addClass("none");
                    if(i==$data){
                        $(this).removeClass("none");
                    }
                });
                $(".attr_nav li").removeClass("clicked");
                $(this).addClass("clicked");
            }
        });
        //      刷选
        $("#shuaxuan").click( function () {

            if($(this).hasClass("clicked")){
                $(".attr_all").addClass("none");
                $(this).removeClass("clicked");

                $h=$(".commont_left_part").height()
                $("#product").height($h)
                $("footer").removeClass("none");
                $(".foot_height").removeClass("none");
                $(".common_nav").removeClass("none");

            }else{
                $(".attr_all").removeClass("none");
                $(this).addClass("clicked");
                $h=$(".attr_all").height()
                $("#product").height($h)
                $(".common_nav").addClass("none");
                $("footer").addClass("none");
                $(".foot_height").addClass("none");


            }


        });

            var top=$("#nav_bar").offset().top;
            $(window).scroll(function(){

                if(top<$(window).scrollTop())
                {
                    $("#nav_bar").addClass('fix_top')
                }
                if($("#nav_bar").offset().top<=top)
                {
                    $("#nav_bar").removeClass('fix_top')
                }
            })
            var b_h=$(".banner").height();
            $(window).scroll(function(){
//                console.log($("#nav_bar").offset().top)
                nav_top=$("#nav_bar").offset().top;
                var bai=0;
                if(b_h<=nav_top){
                    bai=1;
                }else{
                    bai=nav_top/b_h;
                }
                console.log(bai)
                $(".head_index").css("background","rgba(35,25,21,"+bai+")");
            })

//    搜索页面
            $h=($(".search_index .product_list .item .img").height()-$(".search_index .product_list .item .text a").height())/2;
            $(".search_index .product_list .item .text").css("padding-top",$h);
        })
        //添加空间视角
        function addAngle1()
        {
            $.ajax({
                type: "POST",
                url: "/diwen/",
                data:{id:'id'},
                dataType: "html",
                success: function(html){
                    $(".attr_all .content .list").empty();
                    $(".attr_all .content .list").append(html);
                }
            })
        }

    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?7ad15fe9e04108339f91fa950d9b0523";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
//        产品
        jQuery(document).ready(function($) {
            $('#full-width-slider').royalSlider({
                arrowsNav: true,
                loop: false,
                keyboardNavEnabled: true,
                controlsInside: false,
                imageScaleMode: 'fill',
                arrowsNavAutoHide: false,
                autoScaleSlider: true,
                autoScaleSliderWidth: 960,
                autoScaleSliderHeight: 350,
                controlNavigation: 'bullets',
                thumbsFitInViewport: false,
                navigateByClick: true,
                startSlideId: 0,
                autoPlay: false,
                transitionType:'move',
                globalCaption: true,
                deeplinking: {
                    enabled: true,
                    change: false
                },

                imgWidth: 800,
                imgHeight: 800
            });
            var banner_w=$(".rsMinW .rsBullets").width();
            var sc_w=document.body.clientWidth;
            var m_left=(sc_w-banner_w)/2;
            $(".rsMinW .rsBullets").css("right",m_left)
//            console.log(sc_w)
        });

    </script>
    <!-- END FOOTER -->
    </body>
    </html>



<?php $this->endPage() ?>