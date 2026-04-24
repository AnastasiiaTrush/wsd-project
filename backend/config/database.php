<?php

use Illuminate\Support\Str;
use Pdo\Mysql;

return [

    'default' => env('DB_CONNECTION', 'sqlite'),

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => true,
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
        ],

    ],

    'migrations' => [
        'table' => 'migrations',
    ],

    /*
    |---------------------------------------------------
    | REDIS (ВОТ ЭТО САМОЕ ВАЖНОЕ)
    |---------------------------------------------------
    */

    'redis' => [

        'client' => 'phpredis',

        'default' => [
            'host' => 'redis',
            'password' => null,
            'port' => 6379,
            'database' => 0,
        ],

        'cache' => [
            'host' => 'redis',
            'password' => null,
            'port' => 6379,
            'database' => 1,
        ],

    ],

];