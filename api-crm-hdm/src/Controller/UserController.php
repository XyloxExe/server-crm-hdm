<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api')]
#[ApiResource()]
class UserController extends AbstractController
{

    private function generateUniqueFilename(UploadedFile $file): string
    {
        return md5(uniqid()) . '.' . $file->guessExtension();
    }

    #[Route('/users', name: 'api_users_create', defaults: ['_api_resource_class' => User::class], methods: ['POST'])]
    public function createUserAction(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $data = json_decode($request->getContent(), true);

        $user = new User();
        $user->setUsername($data['username']);
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setTelephone($data['telephone']);
        $user->setMail($data['mail']);

        // encode the plain password
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $data[('password')]
            )
        );

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json($user, Response::HTTP_CREATED);
    }

    #[Route('/user/me', name: 'Me', methods: ['GET'])]
    public function Me()
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // return response with user data
        return $this->json($user, 200);
    }

    #[Route('/users', name: 'api_users_get', defaults: ['_api_resource_class' => User::class], methods: ['GET'])]
    public function getUsers(EntityManagerInterface $entityManager)
    {
        $userRepository = $entityManager->getRepository(User::class);
        $users = $userRepository->findAll();

        return $this->json($users, 200);
    }

    #[Route('/users/{id}/update_photo', name: 'api_users_upload',  methods: ['POST'])]
    public function updateUserPhoto(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        $photoFile = $request->files->get('photoFilename');

            $photoFilename = $this->generateUniqueFilename($photoFile);
            $photoFile->move(
                $this->getParameter('photo_user_directory'),
                $photoFilename
            );

            $user->setPhotoFilename($photoFilename);

            $entityManager->flush();

            return new Response('Photo updated successfully', Response::HTTP_OK);
    }

    #[Route('/users/{id}/remove_photo', name: 'api_users_remove_photo', methods: ['POST'])]
    public function removeUserPhoto(int $id, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        $user->setPhotoFilename(null);
        $entityManager->flush();

        return new Response('Photo removed successfully', Response::HTTP_OK);
    }

}