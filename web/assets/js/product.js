
//商品列表
// 点击更多，弹出更多内容

$('.product-list-index .category-attr .con-wrap .con-value .list').each(function(i){
    if ($(this).height()<100){
        $(this).parent().parent().find('.ext').hide();
    }


});
$('.product-list-index .selector-line .more').click(function () {
    $(this).parent().parent().toggleClass('active');
    });
//移动到分类，出现下拉框
advcustom();
function advcustom() {
    var t, t1;
    $('.seleadve-itemwrap a').hover(function() {
        clearTimeout(t);
        clearTimeout(t1);
        $(this).addClass('tre-acrr')
        $(this).siblings('a').removeClass('tre-acrr');
        var title = $(this).attr('title');
        $('.sele-adve-con .seleadvecon-item').each(function() {
            $(this).hide();
            if ($(this).attr('data-title') == title) {
                $(this).show();
            }
        });
    }, function() {
        var sea;
        var title = $(this).attr('title');
        $('.sele-adve-con .seleadvecon-item').each(function() {
            if ($(this).attr('data-title') == title) {
                sea = $(this);
            }
        })
        var se = $(this);

        $(sea).children('.ybtnwrap').children('.ybtncancel').trigger('click');

        function settim(op, opa) {
            var opl = op;
            t = setTimeout(function() {
                $(opl).removeClass('tre-acrr');
                $(opa).hide();
            }, 500);
        }
        settim(se, sea);

    })
    $('.sele-adve-con .seleadvecon-item').hover(function() {
        clearTimeout(t);
        var title = $(this).attr('data-title');
        $('.seleadve-itemwrap .seleadve-itemaaa').each(function() {
            if ($(this).attr('title') == title) {
                $(this).addClass('tre-acrr');
            }
        });
    }, function() {
        var sea;
        var title = $(this).attr('data-title');
        $('.seleadve-itemwrap .seleadve-itemaaa').each(function() {
            if ($(this).attr('title') == title) {
                sea = $(this);
            }
        })
        var se = $(this);
        $(se).children('.ybtnwrap').children('.ybtncancel').trigger('click');

        function setbbbtime(op, opa) {
            t1 = setTimeout(function() {
                $(op).removeClass('tre-acrr');
                $(opa).hide();
            }, 500);
        }
        setbbbtime(sea, se);

    });

}