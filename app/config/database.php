<?php

return array(

    'default' => 'mysql',

    'types' => array(

        'sqlite' => array(
            'driver'   => 'sqlite',
            'dbname'   => '',
            'prefix'   => '',
        ),

        'mysql' => array(
            'driver'    => 'pdo_mysql',
            'host'      => '127.0.0.1',
            'dbname'    => 'umbrella',
            'user'      => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),

        'pgsql' => array(
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'dbname'   => 'database',
            'user'     => 'root',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ),

        'sqlsrv' => array(
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'dbname'   => 'database',
            'user'     => 'root',
            'password' => '',
            'prefix'   => '',
        ),

    )
);