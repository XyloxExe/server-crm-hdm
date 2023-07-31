<?php

namespace App\Controller;

use App\Entity\Contract;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
#[ApiResource()]
class ContractController extends AbstractController
{
    private function generateUniqueFilename(UploadedFile $file): string
    {
        $uuid = uniqid();
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        return $originalFilename . '_' . $uuid . '.' . $file->getClientOriginalExtension();
    }

    #[Route('/contracts/{id}/update_pdf', name: 'api_contracts_upload', methods: ['POST'])]
    public function updatePdfContract(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $contract = $entityManager->getRepository(Contract::class)->find($id);

        $pdfFile = $request->files->get('pdf');

        $pdfFilename = $this->generateUniqueFilename($pdfFile);
        $pdfFile->move(
            $this->getParameter('pdf_contract_directory'),
            $pdfFilename
        );

        $contract->setPdf($pdfFilename);

        $entityManager->flush();

        return new Response('Pdf updated successfully', Response::HTTP_OK);
    }
}
