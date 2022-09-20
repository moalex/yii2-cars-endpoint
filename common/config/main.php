<?php
return [

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    // 'bootstrap' => [
    // ]
    'components' => [
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],
    ],
];
