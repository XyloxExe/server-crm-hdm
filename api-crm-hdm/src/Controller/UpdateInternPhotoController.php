<?php

namespace App\Controller;

use App\Entity\Intern;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
#[ApiResource()]
class UpdateInternPhotoController extends AbstractController
{
    private function generateUniqueFilename(UploadedFile $file): string
    {
        return md5(uniqid()) . '.' . $file->guessExtension();
    }

    #[Route('/interns/{id}/update_photo', name: 'api_interns_upload',  methods: ['POST'])]
    public function updateInternPhoto(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $intern = $entityManager->getRepository(Intern::class)->find($id);

        $photoFile = $request->files->get('photo');

        $photo = $this->generateUniqueFilename($photoFile);
        $photoFile->move(
            $this->getParameter('photo_intern_directory'),
            $photo
        );

        $intern->setPhoto($photo);

        $entityManager->flush();

        return new Response('Photo updated successfully', Response::HTTP_OK);
    }

    #[Route('/interns/{id}/remove_photo', name: 'api_interns_remove_photo', methods: ['POST'])]
    public function removeInternsPhoto(int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(Intern::class)->find($id);

        $user->setPhoto("");
        $entityManager->flush();

        return new Response('Photo removed successfully', Response::HTTP_OK);
    }
}
