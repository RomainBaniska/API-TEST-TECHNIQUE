<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
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

    // On récupère un contact unique
    #[Route('/api/contacts/{id}', name: 'detailContact', methods: ['GET'])]
    public function getDetailContacts(int $id, SerializerInterface $serializer, Contact $contact) {

                // On convertit le numéro de téléphone au format international
                $internationalPhoneNumber = $contact->getInternationalPhoneNumber();
                // On met à jour le numéro de téléphone dans l'objet Contact
                $contact->setTel($internationalPhoneNumber);

         $jsonContact = $serializer->serialize($contact, 'json');
         return new JsonResponse ($jsonContact, Response::HTTP_OK, [], true);
    }

    #[Route('/api/contacts/{id}', name: 'deleteContact', methods: ['DELETE'])]
    public function deleteContact(Contact $contact, EntityManagerInterface $em) : JsonResponse {
        $em->remove($contact);
        $em->flush();      

        return new JsonResponse (null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/api/contacts', name:"createContact", methods: ['POST'])]
    public function createBook(Request $request, SerializerInterface $serializer, EntityManagerInterface $em, UrlGeneratorInterface $urlGenerator): JsonResponse 
    {

        $contact = $serializer->deserialize($request->getContent(), Contact::class, 'json');
        $em->persist($contact);
        $em->flush();

        $jsonContact = $serializer->serialize($contact, 'json');
        
        $location = $urlGenerator->generate('detailContact', ['id' => $contact->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        return new JsonResponse($jsonContact, Response::HTTP_CREATED, ["Location" => $location], true);
   }
}
 