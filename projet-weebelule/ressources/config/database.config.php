<?php

use Idiorm\Silex\Provider\IdiormServiceProvider;

#1 : Connexion BDD
define('DBHOST',     'localhost');
define('DBNAME',     '');
define('DBUSERNAME', '');
define('DBPASSWORD', '');

#2 : Doctrine DBAL
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'weebelule',
        'user'      => 'root',
        'password'  => ''
    ),
));

#3 : Idiorm ORM
$app->register(new IdiormServiceProvider(), array(
    'idiorm.db.options' => array(
        'connection_string' => 'mysql:host='.'localhost'.';dbname='.'weebelule',
        'username' => 'root',
        'password' => '',
        'id_column_overrides' => array()
    )
));
