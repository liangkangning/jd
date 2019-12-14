<?php

/**

 * @link http://www.yiiframework.com/

 * @copyright Copyright (c) 2008 Yii Software LLC

 * @license http://www.yiiframework.com/license/

 */



namespace phone\assets;



use yii\web\AssetBundle;



/**

 * @author Qiang Xue <qiang.xue@gmail.com>

 * @since 2.0

 */

class CoreAsset extends AssetBundle

{

//    public $sourcePath = '@common/metronic';

    /* 全局CSS文件 */

    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/css/normalize.css',

    ];

    /* 全局JS文件 */

    public $js = [

        'assets/js/jquery.min.js',

        'assets/js/bootstrap.min.js',

    ];

    /* 依赖关系 */

    public $depends = [

        //'yii\web\YiiAsset',

        //'yii\grid\GridViewAsset'

    ];

}

