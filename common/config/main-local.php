<?php

return [
    'components' => [
        'db' => [
            'class'       => 'yii\db\Connection',
            'dsn'         => env('DB_DSN'),
            'username'    => env('DB_USERNAME'),
            'password'    => env('DB_PASSWORD'),
            'charset'     => env('DB_CHARSET'),
            'tablePrefix' => env('DB_TABLE_PREFIX'),
            'enableSchemaCache' => true, //开启schema缓存  数据表结构
            // Duration of schema cache.
            'schemaCacheDuration' => 10*60, //10分钟
            // Name of the cache component used to store schema information
            'schemaCache' => 'cache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'Aliyunoss' => [
            'class' => 'backend\components\Aliyunoss',
        ],
    ],

    
];
