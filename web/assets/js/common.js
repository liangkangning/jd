$(function(){

    /**
    * 移动到nav  list跟着变化
    * */
    $('.nav-list li:first-child').addClass('checked');
    $('.nav-list li').mouseover(function(){
        $(this).siblings().removeClass('checked');
        $(this).addClass('checked');
        var index = $(this).index();
        $(this).parent().parent().next().children().addClass('none');
        $(this).parent().parent().next().children().eq(index).removeClass('none');
    });

    $('#nav_bar .navlist li.active').mousemove(function(e){
        // $('#nav_bar .allnav .list').fadeOut(200);
    });
    $('#nav_bar .navlist li.active').mouseout(function(e){
        // $('#nav_bar .allnav .list').fadeIn(200);
    });

    /**
     * 可伸缩搜索框效果
     * box盒子overflow-x:hidden
     * 点击button时input标签向左滑动/或者发送请求
     * button按钮需要固定位置
     * 页面加载完成之后，默认input的margin-left:200px
     */
    var isTrue = true;//状态值，给定一个判断条件
    $('.search_form .search_ico,.search_form .form-label').click(function (e) {
        e.stopPropagation();//阻止冒泡，防止冒泡到body
        var obj = $(this).parent().parent();
        if (!$(obj).is('.form_main')){
            obj = $(this).parent().parent().parent();
        }
        if(isTrue){
            // $('.form_main').addClass('open');
            obj.addClass('open');
            $(obj).find('.form-label span').fadeOut('200');


            //头部的搜索框操作
            var top = $(this).parent().parent().parent().parent().parent();
            var res = $(top).find('.search_form_head');
            if (res.length>0){
                $('.search-dropdown').show();
            }
            // $('.search_form .form-label span').fadeOut('200');
            // setTimeout(function(){
            //     obj.addClass('open_head');
            // }, 800);
            // $('.search_form .input-wrap').animate({marginLeft:'0'},300);
            isTrue = false;

            $(obj).find('input').trigger('focus'); //聚焦输入框


        }
        else{
            // $('.search_form').submit();
            obj.children('.search_form').submit();
            // console.log($('.search_form .input-wrap').val());
            //此处可发送ajax请求，进行搜索查询
        }
    });

    $('.search_form').click(function (e) {
        e.stopPropagation();//阻止冒泡到boay节点上
    });


    $('.search_form_head .input-group-btn').click(function (e) {
        e.stopPropagation();//阻止冒泡，防止冒泡到body
        $(this).toggleClass('open');
    });




    $('body,.search_form .close').on('click',function (e) {

        // e.preventDefault();//阻止默认事件，可不加
        if(!isTrue){
            //alert('点击了body')
            $('.form_main').removeClass('open');
            $('.search_form .form-label span').fadeIn('200');
            // $('.search_form .input-wrap').animate({marginLeft:marigin_width},300);
            $('.search_form_head .search-dropdown').hide();
            isTrue = true;
        }
        else{
        }
    });


    /**
     * 搜索页面的提交事件
     */
    $('.search_index_2020 .search .search_ico').click(function () {
        $('.search_index_2020 #search_form_index').submit();
    });

    /**
    * 返回头部
    * */
    $('.gotop').bind('click',function(){
        $('body,html').animate({'scrollTop':'3'},1000);
    })


    /**
    * 锚文本点击统计
    * */
    $('.seo-anchor').click(function(){
        $anchor_id= $(this).attr('data-anchorid');
        $article_id=$('h1').attr('data-id');
//            alert($new_id)
        $.post('http://www.juda.cn/anchor/', { anchor_id: $anchor_id, article_id:$article_id } );
//            $.post('http://www.yii2.cn/anchor/', function(data){
//                alert('Data Loaded: ' + data);
//            });
    });
    //        右侧咨询
    $(document).ready(function(){
        $('.left_float .left .img_bottom').click(function(){
            $('.left_float .left .img_bottom').attr('date','two')
            $('.left_float .left').addClass('none')
            $('.left_float .right').animate({width:'toggle'},350);
        });
        $('.left_float .right .item.top span').click(function(){
            $('.left_float .right').animate({width:'toggle'},350);
            $('.left_float .left .img_bottom').attr('date','one')
            $('.left_float .left').removeClass('none')
        });
    });

    /**
    * 导航条 置顶
    * */
    $(function(){
        var top=$('#nav_bar').offset().top+400;
        $(window).scroll(function(){
            if(top<$(window).scrollTop())
            {
                $('#nav_bar').addClass('fix_top');
                $('#nav_bar .allnav .list').css('display','');
            }
            if($('#nav_bar').offset().top<top)
            {
                $('#nav_bar').removeClass('fix_top');
                $('#nav_bar #nav_tree .list').show();
            }
        });

    });

    /**
     * 添加新闻详情的说明
     * */

    $('.news_detail_2020 .from p').text("声明： 本网站所发布文章，均来自于互联网，不代表本站观点，如有侵权，请联系删除（QQ：378886361）");


    $('#JS_exp_fliter').click( function () {
        $('.disblock').toggle();
        if( $('#JS_exp_fliter span').text()=='收起 ∧'){
            $('#JS_exp_fliter span').text('更多选项 ∨');
        }else {
            $('#JS_exp_fliter span').text('收起 ∧');
        }
    });



    function index_news(e,obj) {
        var k=0;
        $('.nav_list li').each(function(){
            k++;
            if(k==e) {
                $(this).addClass('checked');
            }else {
                $(this).removeClass('checked');
            }
        });
        var i=0;
        $('.text_list ul').each(function(){
            i++;
            if(i==e) {
                $(this).addClass('block');
            }else {
                $(this).removeClass('block');
            }
        });
    }




    // $('#search_form').submit(function(e){
    //     value =   $('#keywordInput').val();
    //     if ($('#keywordInput').val().length==0){
    //         alert('搜索内容不能为空');
    //         return false;
    //     }
    //     if(value.indexOf('.cn') != -1 ){
    //         alert('输入格式不对');
    //         return false;
    //     }
    //     if(value.indexOf('.com') != -1 ){
    //         alert('输入格式不对');
    //         return false;
    //     }
    //     if(value.indexOf('.com.cn') != -1 ){
    //         alert('输入格式不对');
    //         return false;
    //     }
    //     if(value.indexOf('.org') != -1 ){
    //         alert('输入格式不对');
    //         return false;
    //     }
    //     if(value.indexOf('.net') != -1 ){
    //         alert('输入格式不对');
    //         return false;
    //     }
    //
    // });

    /**
    * 移动到，导航条，有二级分类的时候，左侧的导航条要隐藏
    * */

    $('#nav_bar .navlist .active').hover(
        function () {
            // $('#nav_bar .allnav .list').hide();
        },
        function () {
            var top = $('#nav_bar.fix_top');
            var nav_tree = $('#nav_tree');
            console.log(top.length);
            if (top.length==0&&nav_tree.length>0){
                // $('#nav_bar .allnav .list').show();
            }
        }
    );

    //导航条悬浮的时候，移动到全部分类，显示下拉列表
    $('#nav_bar .allnav').hover(
        function () {
            //判断是否找到 nav_bar fix_top
            var obj = $('#nav_bar.fix_top');
            if (obj.length>0){
                $('#nav_bar .allnav .list').css('display','block');
            }

        },
        function () {
            var obj = $('#nav_bar.fix_top');
            if (obj.length>0){
                $('#nav_bar .allnav .list').css('display','');
            }

        }
    );



    // $('#nav_bar .navlist .active .item_list').hover(
    //     function () {
    //         $('#nav_bar .allnav .list').hide();
    //     },
    //     function () {
    //         //延迟500毫秒执行
    //         $('#nav_bar .allnav .list').show();
    //         // t = setTimeout(function() {
    //         //     $('#nav_bar .allnav .list').show();
    //         // }, 300);
    //     }
    // );

    /**
    * 导航条已选
    * */
    $url=window.location.pathname;
    $data_key = '/'+$('.navlist').data('key')+'/';
    // console.log($data_key);
    $('#nav_bar .navlist li a').each(function(){
        $src=$(this).attr('href');
        // console.log($src);
        if($url==$src){
            $(this).parent().addClass('checked');
            return false;
        }
        if ($data_key ==$src){
            $(this).parent().addClass('checked');
            return false;
        }
    });


    /**
     * 搜索框的下拉效果
     * */




    $('.search-dropdown .dropdown-menu li a').click( function () {

        var boss = $(this).parent().parent().parent().parent().parent();
        // console.log(boss);
        var button = boss.find('button').first();
        $(button).html($(this).text()+'<i></i>');
        var title = $(this).data('title');
        // console.log(title);
        //修改input的value
        var input_value = boss.find('input[name=type]');
        $(input_value).attr('value', title);
        // console.log(input_value);

    });

});

