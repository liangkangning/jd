
$(document).ready(function(){
    var swiper = new Swiper('.index-banner .swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        autoplay: 3000, //是否自动滚动
        loop: true,
        //or initialSlide: 2,
    });

    var swiper2 = new Swiper('.swiper-shiyanshi .swiper-container',{
        autoplay: false,
        speed: 1000,
        autoplayDisableOnInteraction: false,
        loop: true,
        centeredSlides: true,
        slidesPerView: 2,
        pagination: '.swiper-pagination-shiyan',
        paginationClickable: true,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        onInit: function(swiper) {
            swiper.slides[2].className = "swiper-slide swiper-slide-active";
        },
        breakpoints: {
            668: {
                slidesPerView: 1,
            }
        }
    });

    // var swiper2 = new Swiper('.swiper-shiyanshi .swiper-container',{
    //     autoplay: 3000, //是否自动滚动
    //     speed: 500,      //滚动速速
    //     autoplayDisableOnInteraction: true,
    //     loop: true,
    //     centeredSlides: true,
    //     slidesPerView: 3, //当前选中
    //     pagination: '.swiper-pagination-shiyan',
    //     paginationClickable: true,
    //     prevButton: '.swiper-button-prev', // 左右切换
    //     nextButton: '.swiper-button-next', // 左右切换
    //     onInit: function(swiper) {
    //         swiper.slides[3].className = "swiper-slide swiper-slide-active"; //当前选中 状态
    //     },
    //     breakpoints: {
    //         100: {
    //             slidesPerView: 0,
    //         }
    //     }
    // });

    //数字滚动

    $.fn.numberAnimate = function(setting) {
        var defaults = {
            speed: 1000, //动画速度
            num: "", //初始化值
            iniAnimate: true, //是否要初始化动画效果
            symbol: '', //默认的分割符号，千，万，千万
            dot: 0 //保留几位小数点
        }
        //如果setting为空，就取default的值
        var setting = $.extend(defaults, setting);

        //如果对象有多个，提示出错
        if ($(this).length > 1) {
            alert("just only one obj!");
            return;
        }

        //如果未设置初始化值。提示出错
        if (setting.num == "") {
            alert("must set a num!");
            return;
        }
        var nHtml = '<div class="mt-number-animate-dom" data-num="{{num}}">\
            <span class="mt-number-animate-span">0</span>\
            <span class="mt-number-animate-span">1</span>\
            <span class="mt-number-animate-span">2</span>\
            <span class="mt-number-animate-span">3</span>\
            <span class="mt-number-animate-span">4</span>\
            <span class="mt-number-animate-span">5</span>\
            <span class="mt-number-animate-span">6</span>\
            <span class="mt-number-animate-span">7</span>\
            <span class="mt-number-animate-span">8</span>\
            <span class="mt-number-animate-span">9</span>\
            <span class="mt-number-animate-span">.</span>\
          </div>';

        //数字处理
        var numToArr = function(num) {
            num = parseFloat(num).toFixed(setting.dot);
            if (typeof(num) == 'number') {
                var arrStr = num.toString().split("");
            } else {
                var arrStr = num.split("");
            }
            //console.log(arrStr);
            return arrStr;
        }

        //设置DOM symbol:分割符号
        var setNumDom = function(arrStr) {
            var shtml = '<div class="mt-number-animate">';
            for (var i = 0, len = arrStr.length; i < len; i++) {
                if (i != 0 && (len - i) % 3 == 0 && setting.symbol != "" && arrStr[i] != ".") {
                    shtml += '<div class="mt-number-animate-dot">' + setting.symbol + '</div>' + nHtml.replace("{{num}}", arrStr[i]);
                } else {
                    shtml += nHtml.replace("{{num}}", arrStr[i]);
                }
            }
            shtml += '</div>';
            return shtml;
        }

        //执行动画
        var runAnimate = function($parent) {
            $parent.find(".mt-number-animate-dom").each(function() {
                var num = $(this).attr("data-num");
                num = (num == "." ? 10 : num);
                var spanHei = $(this).height() / 11; //11为元素个数
                var thisTop = -num * spanHei + "px";
                if (thisTop != $(this).css("top")) {
                    if (setting.iniAnimate) {
                        //HTML5不支持
                        if (!window.applicationCache) {
                            $(this).animate({
                                top: thisTop
                            }, setting.speed);
                        } else {
                            $(this).css({
                                'transform': 'translateY(' + thisTop + ')',
                                '-ms-transform': 'translateY(' + thisTop + ')',
                                /* IE 9 */
                                '-moz-transform': 'translateY(' + thisTop + ')',
                                /* Firefox */
                                '-webkit-transform': 'translateY(' + thisTop + ')',
                                /* Safari 和 Chrome */
                                '-o-transform': 'translateY(' + thisTop + ')',
                                '-ms-transition': setting.speed / 1000 + 's',
                                '-moz-transition': setting.speed / 1000 + 's',
                                '-webkit-transition': setting.speed / 1000 + 's',
                                '-o-transition': setting.speed / 1000 + 's',
                                'transition': setting.speed / 1000 + 's'
                            });
                        }
                    } else {
                        setting.iniAnimate = true;
                        $(this).css({
                            top: thisTop
                        });
                    }
                }
            });
        }

        //初始化
        var init = function($parent) {
            //初始化
            $parent.html(setNumDom(numToArr(setting.num)));
            runAnimate($parent);
        };

        //重置参数
        this.resetData = function(num) {
            var newArr = numToArr(num);
            var $dom = $(this).find(".mt-number-animate-dom");
            if ($dom.length < newArr.length) {
                $(this).html(setNumDom(numToArr(num)));
            } else {
                $dom.each(function(index, el) {
                    $(this).attr("data-num", newArr[index]);
                });
            }
            runAnimate($(this));
        }
        //init
        init($(this));
        return this;
    };

    function gundong() {
        //初始化
        var numRun = $(".numberRun").numberAnimate({
            num: '18',
            speed: 2000,
            symbol: ","
        });
        var numRun2 = $(".numberRun2").numberAnimate({
            num: '100',
            speed: 2000,
            symbol: ","
        });
        var numRun3 = $(".numberRun3").numberAnimate({
            num: '3000',
            speed: 2000,
            symbol: ","
        });
        var numRun4 = $(".numberRun4").numberAnimate({
            num: '10000000',
            speed: 2000,
            symbol: ","
        });
    }
    var wind_h = $(window).height();//可见高度
    var is_gun = false;
    $(window).scroll(function(){
        // console.log(wind_h);
        // console.log('实验室模块到头部距离：'+$('.shili .shuzi .text').offset().top)
        var top=$('.shili .shuzi .text').offset().top-wind_h;
        var top_max = top+wind_h;
        // console.log(top)
        //
        // console.log($(window).scrollTop())
        if(top<$(window).scrollTop())
        {
            if (!is_gun){
                gundong();
                is_gun = true;
            }

        }else {
            is_gun = false;
        }


        if (top_max<$(window).scrollTop()){
            is_gun = false;
        }
    });

    $('.location_tel .top').mousemove(function(e){
        $(this).parent().parent().addClass('active');
    });

    // $('.location_tel li.relative').mouseout(function(e){
    //     console.log($(this));
    //     $(this).removeClass('active');
    // });

    $('.location_tel li.relative').hover(
        function () {

        },
        function () {
            $(this).removeClass('active');
        }
    );

    /**
     * 视频播放
     */


    $(window).scroll(function(){
        var top=$('.video_index video').offset().top;
        //console.log(top);
        top = top - $('.video_index video').height();
        top_max = top+wind_h;
        video = $('.video_index video');
        var is_bo = false;
        if(top<$(window).scrollTop())
        {
            if (!is_bo){
                //$('video').trigger('play');
                console.log('play');
                is_bo = true;
            }

        }else {

            is_bo = false;
        }

        if (top_max<$(window).scrollTop()){
            is_bo = false;
            ///$('video').trigger('pause');
            console.log('stop');
        }

    });

});