<?php

use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();
$app['debug'] = true;

$app->register(new ServiceControllerServiceProvider());
$app->register(
    new Silex\Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__.'/../src/Web/Resources/views', 
    )
);

$app
    ->get('/', 'controller.album:addPhotosAction')
;


$app
    ->post('/file/upload', 'controller.upload:uploadAction')
;


return $app;
