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
    'controllerNamespace' => 'frontend\controllers',
    /* 模块 */
    'modules' => [
        'user' => [
            'class' => 'frontend\modules\user\Module',
        ],
    ],
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                //这里如果你是qq的邮箱，可以参考qq客户端设置后再进行配置 http://service.mail.qq.com/cgi-bin/help?subtype=1&&id=28&&no=1001256
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.exmail.qq.com',
                'username' => 'liangkangning@juda.cn',
                'password' => '7YRmLSjWZFs42wox',
                'port' => '465',
                'encryption' => 'ssl',
            ],
            'messageConfig'=>[
                'charset'=>'UTF-8',
                'from'=>['liangkangning@juda.cn'=>'钜大数字运营中心']
            ],
        ],
        'user' => [
            'identityClass' => 'frontend\models\User',
            'enableAutoLogin' => true,
        ],
        /* 修改默认的request组件 */
        'request' => [
            'class' => 'common\core\Request',
            'baseUrl' => Yii::getAlias('@frontendUrl'),
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
            'enablePrettyUrl' => env('FRONTEND_PRETTY_URL', true),
            'showScriptName' => false,
            'suffix'=>'.html',
            'rules' => [
                '<controller:(news|product|blog)>/<id:\d+>'=>'<controller>/detail',
                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|special|libattery|make|jishu|shiyanshi|zhizao|news|about|licheng|zizhi|contact|job|lifepo4|search|blog|zizhi|test|anchor|keywords|sitemap|apis|wenhua|tzcell|tzpower)>','route'=>'<controller>','suffix'=>'/'],
                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>-p<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],
                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/list-<list:.+>','route'=>'<controller>','suffix'=>'.html'],
                ['pattern'=>'<controller:(industrial|diwen|kuanwen|taisuanli|fanbao|libattery|juhewu|chuneng|lilizi|ironicphosphate|dongli|lifepo4)>/index-<page:\d+>','route'=>'<controller>/index','suffix'=>'.html'],
                ['pattern'=>'<controller:(news|blog)>/<action:\w+>_<page:\d+>','route'=>'<controller>/<action>','suffix'=>'.html'],
                ['pattern'=>'<controller:(keywords)>/<id:\w+>/index-<page:\d+>','route'=>'<controller>/item','suffix'=>'.html'],
                ['pattern'=>'<controller:(keywords)>/<id:\w+>','route'=>'<controller>/item','suffix'=>'/'],

                /**
                 * 特种电芯，特种电源都归为一个列表页
                 */
                [
                    'pattern' => '<controller:(diwen18650|diwenlipo|tz26650|fangbaocell|charger|bzpower)>',
                    'route' => 'product-list',
                    'suffix' => '/',
                ],

                /**
                 * 专题页面，统一入口
                 */
                [
                    'pattern' => '<controller:(diwenzt)>',
                    'route' => 'zhuanti',
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
