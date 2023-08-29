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
            // Au hasard, on définit si le contact est actif ou inactif
            $isActive = random_int(0, 1);
            $contact->setIsActive($isActive);

            $manager->persist($contact);
        }

        $manager->flush();
    }
}