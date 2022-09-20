<?php

return [
    'components' => [
        /**
         * MySQL Database
         * @var [database]
         * @var [login]
         * @var [password]
         */
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=[database]',
            'username' => '[login]',
            'password' => '[password]',
            'charset' => 'utf8'
        ]
    ],

];