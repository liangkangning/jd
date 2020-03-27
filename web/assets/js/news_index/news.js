$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
    });

    $('.news_detail_2020 .hide-article-box ').click( function () {
        $('.news_detail_2020 .content .main').removeClass('zhaunti_main');
        $(this).hide();

    });
});