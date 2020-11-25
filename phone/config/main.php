<?php

$params = array_merge(

    require(__DIR__ . '/../../common/config/params.php'),

    require(__DIR__ . '/../../common/config/params-local.php'),

    require(__DIR__ . '/params.php'),

    require(__DIR__ . '/params-local.php')

);



return [

    'id' => 'app-home',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

    /* 默认路由 */

    'defaultRoute' => 'index',

    /* 控制器默认命名空间 */

    'controllerNamespace' => 'phone\controllers',

    /* 模块 */

    'modules' => [

        'user' => [

            'class' => 'phone\modules\user\Module',

        ],

    ],

    'components' => [

        'user' => [

            'identityClass' => 'phone\models\User',

            'enableAutoLogin' => true,

        ],

        /* 修改默认的request组件 */

        'request' => [

            'class' => 'common\core\Request',

            'baseUrl' => Yii::getAlias('@phoneUrl'),

        ],

        'log' => [

            'traceLevel' => YII_DEBUG ? 3 : 0,

            'targets' => [

                [

                    'class' => 'yii\log\FileTarget',

                    'levels' => ['error', 'warning'],

                ],

            ],

        ],



//  ['pattern'=>'<controller:(diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|special|libattery|make|news|about|)>','route'=>'<controller>','suffix'=>'/'],

//    ['pattern'=>'list-<controller:(diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli)>-<list:\w+>','route'=>'<controller>','suffix'=>'.html'],

        'urlManager' => [

            'enablePrettyUrl' => env('PHONE_PRETTY_URL', true),

            'showScriptName' => false,

            'suffix'=>'.html',

            'rules' => [

                '<controller:(news|product|blog)>/<id:\d+>'=>'<controller>/detail',
                '<controller:(news|product|blog)>/mip/<id:\d+>'=>'<controller>/mip',
                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|special|libattery|make|news|about|lifepo4|search|blog|zizhi|product|keywords|sou)>','route'=>'<controller>','suffix'=>'/'],
                ['pattern'=>'mip/<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|special|libattery|make|news|about|lifepo4|search|blog|zizhi|keywords)>','route'=>'<controller>','suffix'=>'/'],


                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>-p<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],
                ['pattern'=>'mip/<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>-p<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],

                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>','route'=>'<controller>','suffix'=>'.html'],
                ['pattern'=>'mip/<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>','route'=>'<controller>','suffix'=>'.html'],

                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/index-<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],
                ['pattern'=>'mip/<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/index-<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],

                ['pattern'=>'<controller:(news|blog)>/<action:\w+>_<page:\d+>','route'=>'<controller>/<action>','suffix'=>'.html'],

                ['pattern'=>'<controller:(keywords)>/<id:\w+>','route'=>'<controller>/item','suffix'=>'/'],
                ['pattern'=>'mip/<controller:(keywords)>/<id:\w+>','route'=>'<controller>/item','suffix'=>'/'],
                ['pattern'=>'<controller:(keywords)>/<id:\w+>/list-<list:.+>-p<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],
                [
                    'pattern' => 'contact',//首页、产品频道/列表、keywords聚合页、研发、关于钜大等，文章列表除外
                    'route' => 'about/contact',
                    'suffix' => '/',
                ],



                [
                    'pattern' => 's-productlist',//首页、产品频道/列表、keywords聚合页、研发、关于钜大等，文章列表除外
                    'route' => 'site/product-list',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 's-product',//产品详情页
                    'route' => 'site/product-detail-list',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 's-blog',//博客详情页
                    'route' => 'site/blog-detail-list',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 's-news',//新闻列表+文章页
                    'route' => 'site/news-list',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 's-news1',//新闻列表+文章页
                    'route' => 'site/news-list1',
                    'suffix' => '.xml',
                ],
                [
                    'pattern' => 's-news2',//新闻列表+文章页
                    'route' => 'site/news-list2',
                    'suffix' => '.xml',
                ],


            ],

        ],

        'errorHandler'=>array(

            // use 'site/error' action to display errors

            'errorAction'=>'size/error',

        ),



    ],

    'params' => $params,

];

