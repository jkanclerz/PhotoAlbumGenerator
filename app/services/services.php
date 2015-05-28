<?php

use Gaufrette\Filesystem;
use Gaufrette\Adapter\Local as LocalAdapter;
use Storage\Uploader\Uploader;
use Jkan\ObjectCreation\AbstractFactory;


$app['filesystem.adapter.local'] = function () {
    return new LocalAdapter(__DIR__.'/../../web/media');
};

$app['filesystem'] = function() use ($app) {
    return new Filesystem($app['filesystem.adapter.local']);
};

$app['uploader'] = function() use ($app) {
    return new Uploader($app['filesystem']);
};

$app['factory.file'] = function() use ($app) {
    return new AbstractFactory('Storage\Model\File');
};
