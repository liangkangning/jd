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

class MobilAsset extends AssetBundle

{

    public $sourcePath = '@common/metronic';



    /* 全局CSS文件 */

    public $css = [

        'layouts/layout3/css/themes/style_mobil.css',
        'layouts/layout3/css/themes/normalize.css',


    ];

    /* 全局JS文件 */

    public $js = [
        'layouts/layout3/scripts/jquery.royalslider.min.js'
    ];

    /* 选项 */

    //public $jsOptions = ['condition' => 'lt IE9'];

    /* 依赖关系 */

    public $depends = [

        'frontend\assets\CoreAsset',

    ];

}

