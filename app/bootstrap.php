<?php

session_start();

define('APSPATH', __DIR__);

ini_set('display_errors', true);

require_once 'includes/classes/Config.php';
require_once 'includes/classes/Database.php';
require_once 'includes/functions.php';

// Start app
$app = [];

// Setup config
$app['config'] = new Config();
$app['config']->load(APSPATH . '/config.php');

define('REQUEST_URI', $_SERVER['REQUEST_URI']);
define('APP_URL', $app['config']->get('app.url'));
define('APP_VIEWS', $app['config']->get('app.views'));

// Start database
$app['db'] = new Database($app['config']->get('db'));
