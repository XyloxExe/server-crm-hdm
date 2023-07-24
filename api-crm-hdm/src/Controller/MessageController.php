<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
#[ApiResource()]
class MessageController extends AbstractController
{
    #[Route('/users/{senderId}/messages/{recipientId}', name: 'getUserMessage', defaults: ['_api_resource_class' => Message::class], methods: ['GET'])]
    public function getUserMessage(EntityManagerInterface $entityManager, $senderId, $recipientId): Response
    {
        $repository = $entityManager->getRepository(Message::class);
        $messages = $repository->findMessagesByUsers($senderId, $recipientId);

        return $this->json($messages);
    }

    #[Route('/users/{senderId}/messages/{recipientId}', name: 'sendMessage', defaults: ['_api_resource_class' => Message::class], methods: ['POST'])]
    public function sendMessage(EntityManagerInterface $entityManager, Request $request, $senderId, $recipientId): Response
    {

        $data = json_decode($request->getContent(), true);

        $sender = $entityManager->getRepository(User::class)->find($senderId);
        $recipient = $entityManager->getRepository(User::class)->find($recipientId);

        $createdAt = new \DateTime();

        $message = new Message();
        $message->setSender($sender);
        $message->setRecipient($recipient);
        $message->setContent($data['content']);
        $message->setCreatedAt($createdAt);

        $entityManager->persist($message);
        $entityManager->flush();

        return $this->json($message, 201);
    }
}
