<?php

namespace Web\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AlbumController
{
    protected $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function addPhotosAction(Request $request)
    {
        return new Response($this->twig->render('Upload/addPhotos.html.twig'));
    }
}