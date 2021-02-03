<?php

///Applications/MAMP/bin/php/php7.4.2/bin/php -S localhost:8085;
/// /Applications/MAMP/bin/php/php7.4.2/bin/php -S localhost:8089 -t public/
error_reporting(E_ALL ^ E_STRICT);

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();

