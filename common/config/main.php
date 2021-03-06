<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    /* 源语言 */
    'sourceLanguage' => 'zh-CN',
    /* 目标语言 */
    'language' => 'zh-CN',

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'elasticsearch' => [
            'class' => 'yii\elasticsearch\Connection',
            'nodes' => [
                ['http_address' => '127.0.0.1:9200'],
                // configure more hosts if you have a cluster
            ],
        ],


        /**
         * 多语言管理，
         * 将“源语言”翻译成“目标语言”，必须使用\Yii::t('common','中文')，当源语言和目标语言相同时默认不翻译
         * common/messages中必须存在“目标语言(en-US)”文件夹，且对应语言文件中存在：'中文'=>'English'
         */
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath'=>'@common/messages',
                    'fileMap' => [
                        'common'=>'common.php',
                        'backend'=>'backend.php',
                        'frontend'=>'frontend.php',
                    ],
                ],
            ],
        ],
    ],
];
