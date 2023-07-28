<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicUploadsController extends AbstractController
{
    #[Route('/public/uploads/{filename}', name: 'public_uploads')]
    public function show(string $filename)
    {
        $filePath = $this->getParameter('photo_user_directory') . '/' . $filename;
        return new BinaryFileResponse($filePath);
    }
}
