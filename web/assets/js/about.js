/**
 * 人才招聘 点击 +  显示更多信息
 * */
$('.about-index .job .content .list .ico').click( function () {
    var boss_ul = $(this).parent().parent().parent().parent();
    var self_li =   $(this).parent().parent().parent();
    var list_li = $(boss_ul).find('li.active');
    var bottome_tx_item_list_li = boss_ul.find('li');
    if (list_li.is($(this).parent().parent().parent())||list_li.length<=0){
        $(self_li).toggleClass('active');
        $(self_li).find('.description').slideToggle('slow');
        // $(item_list).toggleClass('active');
        // $(triangle_ico).toggleClass('active');

    }else {
        // list_li.removeClass('active');
        // item_list.removeClass('active');
        // $(bottome_tx_item_list_li).hide();
        // $(bottome_tx_item_list_li).eq(index).slideToggle('slow');
        // $(this).parent().parent().toggleClass('active');
    }
});

var position = 0;
$(function () {
    var animation = $(".animation");
    var scroHoutside = $(document).scrollTop();  //滚动高度
    var viewHoutside = $(window).height();  //可见高度
    for(var j=0;j<animation.length;++j){
        // if( ((animation.eq(j).offset().top)>=scroHoutside  && (animation.eq(j).offset().top) < (scroHoutside+viewHoutside)) || ((animation.eq(j).offset().top + animation.eq(j).outerHeight())>=scroHoutside  && (animation.eq(j).offset().top + animation.eq(j).outerHeight()) < (scroHoutside+viewHoutside)) ){
        //
        // }else {
        //     animation.eq(j).addClass('hide-pic');
        // }
        animation.eq(j).addClass('hide-pic');
    }

    $(document).scroll(function () {
        gundong();
    });
    $('.about-index .main .nav-list li').mousemove(function () {
        gundong();
    });


});

function gundong() {
    var is_licheng = $('.nav-con-item-active.checked');
    console.log(is_licheng.length);
    if (is_licheng.length>0){
        console.log('存在')
        var scroH = $(document).scrollTop();  //滚动高度
        var viewH = $(window).height();  //可见高度
        var contentH = $(document).height();  //内容高度

        var hide = $(".animation");
        for(var i=0; i<hide.length; ++i){
            // console.log(hide[i].offsetTop < (scroH+viewH));
            // if((hide.eq(i).offset().top - hide.eq(i).outerHeight()) < (scroH+viewH)){
            if(scroH >= position){ // 向下
                if((hide.eq(i).offset().top - 100)>=scroH  && (hide.eq(i).offset().top - 100) < (scroH+viewH)){
                    hide.eq(i).addClass('show-lower');
                }
            }else { // 向上
                // console.log( ((hide.eq(i).offset().top + hide.eq(i).outerHeight()) - 100) ,scroH );
                if(((hide.eq(i).offset().top + hide.eq(i).outerHeight()) - 100)>=scroH  && ( (hide.eq(i).offset().top + hide.eq(i).outerHeight()) - 100) < (scroH+viewH)){
                    hide.eq(i).addClass('show-upper');
                }
            }
            // if((hide.eq(i).offset().top - 100)>=scroH  && (hide.eq(i).offset().top - 100) < (scroH+viewH)){
            //     // console.log(hide[i].offsetTop);
            //     if(scroH >= position){
            //         hide.eq(i).addClass('show-lower');
            //     }else {
            //         hide.eq(i).addClass('show-upper');
            //     }
            // }
        }

        position = scroH;
        scroH = null;
        viewH = null;
        contentH = null;
        hide = null;
    }
}


function tijiao()

{



    if(document.getElementById('name').value=='')

    {

        alert('请填写名字');

        return false;

    }

    if(document.getElementById('email').value=='')

    {

        alert('请填写邮箱');

        return false;

    }

    alert('提交成功！');

    var a=document.getElementById('form');

    a.submit();

}