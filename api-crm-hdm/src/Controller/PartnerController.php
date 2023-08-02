<?php

namespace App\Controller;

use App\Entity\Partner;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
#[ApiResource()]
class PartnerController extends AbstractController
{
    #[Route('/partners', name: 'api_partners_create', defaults: ['_api_resource_class' => Partner::class], methods: ['POST'])]
    public function addPartner(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $data = json_decode($request->getContent(), true);

        $partner = new Partner();
        $partner->setName($data['name']);
        $partner->setTelephone($data['telephone']);
        $partner->setWebsite($data['website']);
        $partner->setSector($data['sector']);
        $partner->setComment($data['comment']);
        $partner->setKeyword($data['keyWord']);
        $partner->setAddedBy($user);

        $entityManager->persist($partner);
        $entityManager->flush();

        return $this->json($partner, Response::HTTP_CREATED);

    }

    #[Route('/partners', name: 'api_partners_get', defaults: ['_api_resource_class' => Partner::class], methods: ['GET'])]
    public function getPartner(EntityManagerInterface $entityManager)
    {
        $partners = $entityManager->getRepository(Partner::class)->findAll();

        $partnerData = [];
        foreach ($partners as $partner) {
            $partnerData[] = [
                'id' => $partner->getId(),
                'name' => $partner->getName(),
                'telephone' => $partner->getTelephone(),
                'webSite' => $partner->getWebSite(),
                'sector' => $partner->getSector(),
                'comment' => $partner->getComment(),
                'keyword' => $partner->getKeyWord(),
                'addedBy' => [
                    'id' => $partner->getAddedBy()->getId(),
                    'firstName' => $partner->getAddedBy()->getFirstName(),
                    'lastName' => $partner->getAddedBy()->getLastName(),
                ]
            ];
        }

        return $this->json($partnerData, 200);

    }
}
