<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Pour les tests, on va créer une vingtaine de contacts
        for ($i=0; $i < 20; $i++) { 
            $contact = new Contact();
            $contact->setFirstName("Prenom" . $i); 
            $contact->setLastName("Nom" . $i); 
            $contact->setEmail("Email" . $i); 
            $contact->setAddress("Adresse" . $i); 
            $contact->setTel("Tel" . $i); 
            $contact->setAge($i); 
            $manager->persist($contact);
        }

        $manager->flush();
    }
}