<?php

use Symfony\Component\Debug\Debug;

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';

    Debug::enable();

    $app = require __DIR__.'/../app/app.php';
    require __DIR__.'/../app/services/services.php';
    require __DIR__.'/../app/services/controllers.php';
    $app->boot();
    $app->run();
}

