<?php
return [
    'MEDOO'=>[
        'database_type' => getenv('DB_CONNECTION'),
        'database_name' => getenv('DB_DATABASE'),
        'server'        => getenv('DB_HOST'),
        'username'      => getenv('DB_USERNAME'),
        'password'      => getenv('DB_PASSWORD'),
        'charset'       => getenv('DB_CHARSET'),
        // 可选
        'port'          => getenv('DB_PORT'),
        // 可选，定义表的前缀
        'prefix'        => getenv('DB_PREFIX')
    ],
    'ORM'=>[
        'driver'    => getenv('DB_CONNECTION'),
        'host'      => getenv('DB_HOST'),
        'database'  => getenv('DB_DATABASE'),
        'username'  => getenv('DB_USERNAME'),
        'password'  => getenv('DB_PASSWORD'),
        'charset'   => getenv('DB_CHARSET'),
        'collation' => getenv('DB_COLLATION'),
        'prefix'    => getenv('DB_PREFIX')
    ]
];