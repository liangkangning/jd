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

    public $sourcePath = '@common/metronic';



    /* 全局CSS文件 */

    public $css = [



    ];

    /* 全局JS文件 */
    /* ft-carousel 新闻滚动 */
    public $js = [
        'layouts/layout3/scripts/ft-carousel.min.js',
    ];

    /* 选项 */

    //public $jsOptions = ['condition' => 'lt IE9'];

    /* 依赖关系 */

    public $depends = [

        'frontend\assets\CoreAsset',

    ];

}

