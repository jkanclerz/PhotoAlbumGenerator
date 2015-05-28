<?php

use Web\Controller\UploadController;
use Web\Controller\AlbumController;


$app['controller.album'] = function() use ($app) {
    $controller = new AlbumController($app['twig']);

    return $controller;
};

$app['controller.upload'] = function() use ($app) {
    $controller = new UploadController($app['factory.file'], $app['uploader']);

    return $controller;
};

