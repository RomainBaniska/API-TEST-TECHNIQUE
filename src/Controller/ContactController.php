<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    #[Route('/api/contacts', name: 'contacts', methods: ['GET'])]
    public function getAllContacts(ContactRepository $contactRepository, SerializerInterface $serializer): JsonResponse
    {
        $contactList = $contactRepository->findAll();

        $jsonContactList = $serializer->serialize($contactList, 'json');
        return new JsonResponse ($jsonContactList, Response::HTTP_OK, [], true);
    }   
}