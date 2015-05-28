<?php

namespace Web\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Web\Form\Type\PresentationType;
use Symfony\Component\EventDispatcher\GenericEvent;

class UploadController
{
    protected $fileFactory;
    protected $uploader;

    public function __construct($fileFactory, $uploader)
    {
        $this->fileFactory = $fileFactory;
        $this->uploader = $uploader;
    }

    public function uploadAction(Request $request)
    {
        if ($request->isMethod('POST')) {

            $data = [
                'file' => $request->files->get('uploadedFile')
            ];
            $file = $this->fileFactory->create($data);

            $this->uploader->upload($file);
        }

        $path = sprintf('%s/%s/%s', 'http://localhost:8888', 'media', $file->getPath());
        
        return new JsonResponse([
            'path' => $file->getPath(),
            'webPath' => $path,
            'title' => 'myTitle',
            'id' => 2,
        ], JsonResponse::HTTP_OK);
    }
}