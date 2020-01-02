/**
 * 研发制造  点击+   出现更详细的内容
 * */
$('.yanjiuyuan .bottome_tx .list .ico').click( function () {
    var boss = $(this).parent().parent().parent().parent().parent();
    // console.log(boss.find('triangle_ico'));
    var index = $(this).parent().parent().index();
    var list_li = $(boss).find('.list li.active');
    var item_width = $(this).parent().parent().innerWidth();
    var left = 89 + (item_width*index);
    var triangle_ico = boss.find('.triangle_ico');
    var bottome_tx_item_list_li = boss.find('.item_list li');
    var item_list = boss.find('.item_list');
    $(triangle_ico).css('left',left+'px');
    if (list_li.is($(this).parent().parent())||list_li.length<=0){
        $(this).parent().parent().toggleClass('active');
        $(item_list).toggleClass('active');
        $(triangle_ico).toggleClass('active');
        $(bottome_tx_item_list_li).eq(index).slideToggle('slow');
    }else {
        list_li.removeClass('active');
        item_list.removeClass('active');
        $(bottome_tx_item_list_li).hide();
        $(bottome_tx_item_list_li).eq(index).slideToggle('slow');
        $(this).parent().parent().toggleClass('active');
    }
});

$('.shiyanshi .bottome_tx .list .ico').click( function () {
    var boss = $(this).parent().parent().parent().parent().parent();
    // console.log(boss.find('triangle_ico'));
    var index = $(this).parent().parent().index();
    var list_li = $(boss).find('.list li.active');
    var item_width = $(this).parent().parent().innerWidth();
    var left = -15 + (item_width*(index%2));
    var triangle_ico = boss.find('.triangle_ico');
    var bottome_tx_item_list_li = boss.find('.item_list li');
    var item_list = boss.find('.item_list');
    $(triangle_ico).css('left',left+'px');
    if (list_li.is($(this).parent().parent())||list_li.length<=0){
        $(this).parent().parent().toggleClass('active');
        $(item_list).toggleClass('active');
        $(triangle_ico).toggleClass('active');
        $(bottome_tx_item_list_li).eq(index).slideToggle('slow');
    }else {
        list_li.removeClass('active');
        item_list.removeClass('active');
        $(bottome_tx_item_list_li).hide();
        $(bottome_tx_item_list_li).eq(index).slideToggle('slow');

        $(this).parent().parent().toggleClass('active');
    }
});