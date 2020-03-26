<?php

/**

 * @link http://www.yiiframework.com/

 * @copyright Copyright (c) 2008 Yii Software LLC

 * @license http://www.yiiframework.com/license/

 */



namespace frontend\assets;



use yii\web\AssetBundle;



/**

 * @author Qiang Xue <qiang.xue@gmail.com>

 * @since 2.0

 */

class NewsAsset extends AssetBundle

{

//    public $sourcePath = '@common/metronic';



    /* 全局CSS文件 */

    public $css = [
        'assets/css/swiper.css',
        'assets/css/news_lunbo.css',//新闻首页轮播
    ];

    /* 全局JS文件 */
    /* ft-carousel 新闻滚动 */
    public $js = [
        'layouts/layout3/scripts/ft-carousel.min.js',
        'assets/js/swiper.js',//轮播需要
        'assets/js/news_index/news.js',//新闻页面公用
        'assets/js/news_index/prototype.js',//新闻首页轮播
        'assets/js/news_index/ImageSlide.js',//新闻首页轮播
    ];

    /* 选项 */

    //public $jsOptions = ['condition' => 'lt IE9'];

    /* 依赖关系 */

    public $depends = [

        'frontend\assets\CoreAsset',

    ];

}

