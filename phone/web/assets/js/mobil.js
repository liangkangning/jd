
    $(function(){



//            返回上一页

    var u = navigator.userAgent;

    var goBack=document.getElementById("goBack");

    if(goBack!=null){

        //针对ios原生浏览器处理

        if(!!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) && /(Safari)/i.test(u)){

            goBack.setAttribute("click","javascript:window.location=document.referrer;");

        }



//            产品分类列表，现实已选

        $url=window.location.pathname;
        $(".product_nav_list .left li a").each(function(){
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

    // //定制案例文本居中
    //
    // $(".case_list .list .text").each(function(){
    //
    //     $h=($(".case_list .list .img").height()-$(this).height())/2;
    //
    //     $(this).css("padding-top",$h);
    //
    // });









    //产品显示方式

    $(".attr_more").click( function () {



        if($(this).attr("data")=="one"){

            $(".p_list ul").removeClass("w100");

            $(".p_list ul").addClass("w50")

            $(this).attr("data","two")

            // $(".w50 .item .text").css("margin-top","0px");

        }else{

            $(".p_list ul").removeClass("w50");

            $(".p_list ul").addClass("w100")

            $(this).attr("data","one")

            // $h=($(".w100 .item .img").height()-$(".w100 .item .text a").height())/2;

            // $(".w100 .item .text").css("margin-top",$h);





        }

    });

    // $h=($(".w100 .item .img").height()-$(".w100 .item .text a").height())/2;

    // $(".w100 .item .text").css("margin-top",$h);



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

            $(".attr_all").removeClass("none");
            $("#newBridge").css("display","none");
            $(this).addClass("clicked");
            $(".product_imgs").addClass("none")
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

    var b_h=250;

    $(window).scroll(function(){

//                console.log($("#nav_bar").offset().top)

        nav_top=$("#nav_bar").offset().top;

        var bai=0;

        if(b_h<=nav_top){

            bai=1;

        }else{

            bai=nav_top/b_h;

        }

        // console.log(nav_top)
        console.log(b_h)


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



var _hmt = _hmt || [];

(function() {

    var hm = document.createElement("script");

    hm.src = "https://hm.baidu.com/hm.js?7ad15fe9e04108339f91fa950d9b0523";

    var s = document.getElementsByTagName("script")[0];

    s.parentNode.insertBefore(hm, s);

})();



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

        autoScaleSliderHeight: 576,

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

// 分类，现实更多
    $(".product_nav_list_bottom .bottom_line").click( function () {

        if( $(".product_nav_list_bottom .bottom_line").attr("data")=="one"){
            $(".product_nav_list_bottom .bottom_line").attr("data","two");
            $(".product_nav_list").removeClass("p_n_l_heigh");

        }else {
            $(".product_nav_list_bottom .bottom_line").attr("data","one");
            $(".product_nav_list").addClass("p_n_l_heigh");
        }


    });


    // 头部左侧点击
    $(".header_right .img").click( function () {

        if($(this).attr("data")=="none"){
            $(this).attr("data","block");
            $(".nav_list").removeClass("none");
        }else{
            $(this).attr("data","none");
            $(".nav_list").addClass("none");
        }
    });

    //锚文本点击统计
    $(".seo-anchor").click(function(){
        $anchor_id= $(this).attr("data-anchorid");
        $article_id=$("h1").attr("data-id");
//            alert($new_id)
        $.post("http://www.juda.cn/anchor/", { anchor_id: $anchor_id, article_id:$article_id } );
//            $.post("http://www.yii2.cn/anchor/", function(data){
//                alert("Data Loaded: " + data);
//            });
    });

