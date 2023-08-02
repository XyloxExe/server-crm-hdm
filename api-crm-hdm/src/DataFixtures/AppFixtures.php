<?php

namespace App\DataFixtures;


use App\Entity\Client;
use App\Entity\Company;
use App\Entity\Intern;
use App\Entity\Pole;
use App\Entity\Project;
use App\Entity\Status;
use App\Entity\StatusClient;
use App\Entity\Task;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $poleNames = ['web-dev', 'design-graph', 'seo', 'RHR', 'RHP', 'B2B'];
        $typeStatus = ['Nouvelle', 'En attente', 'En cours ', 'Terminée', 'Annulée', 'En retard ', 'Problème', 'En révision'];
        $typeClientStatus = ['Clients en cours', 'Clients en cours de traitement', 'Clients traités', 'Clients abandonnés', 'Clients inactifs', 'Clients potentiels'];
        $user = $manager->getRepository(User::class)->findOneBy(['username' => 'John']);

        // Permet de créer 10 utilisateurs
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $password = $this->hasher->hashPassword($user, 'azerty');
            $user->setPassword($password);
            $user->setMail($faker->email);
            $user->setTelephone($faker->phoneNumber);
            $user->setTeamLeader(0);
            $username = strtolower($lastName) . '.' . strtolower($firstName);
            $user->setUsername($username);
            $manager->persist($user);
        }

        // Permet de mettre en place les pôles
        foreach ($poleNames as $name) {
            $pole = new Pole();
            $pole->setNamePole($name);
            $pole->setDescription($faker->text);
            $manager->persist($pole);
        }

        // Permet de mettre en place les types des status clients
        foreach ($typeClientStatus as $name) {
            $statusClient = new StatusClient();
            $statusClient->setTypeClient($name);
            $manager->persist($statusClient);
        }

        // Permet de mettre en place les types de status
        foreach ($typeStatus as $name) {
            $status = new Status();
            $status->setTypeStatus($name);
            $manager->persist($status);
        }

        // Permet de créer 10 clients
        for ($i = 0; $i < 10; $i++) {
            $client = new Client();
            $client->setFirstName($faker->firstName);
            $client->setLastName($faker->lastName);
            $client->setMail($faker->email);
            $client->setTelephone($faker->phoneNumber);
            $client->setCompany($faker->company);
            $client->setCountry($faker->country);
            $client->setAddress($faker->address);
            $manager->persist($client);
        }

        // Permet de créer 10 stagiaires
        $startInternship = $faker->dateTime;
        for ($i = 0; $i < 10; $i++) {
            $inter = new Intern();
            $inter->setFirstName($faker->firstName);
            $inter->setLastName($faker->lastName);
            $inter->setMail($faker->email);
            $inter->setTelephone($faker->phoneNumber);
            $inter->setAdress($faker->address);
            $inter->setCountry($faker->country);
            $inter->setSchool("Mon école");
            $inter->setCity($faker->city);
            $inter->setStartInternship($faker->dateTime);
            $inter->setEndInternship($faker->dateTimeBetween($startInternship, 'now'));
            $randomPoleName = $poleNames[array_rand($poleNames)];
            $pole = $manager->getRepository(Pole::class)->findOneBy(['namePole' => $randomPoleName]);
            $inter->setPole($pole);
            $inter->setDateOfBirth($faker->dateTime);
            $photoUrl = "https://picsum.photos/40/40";
            $inter->setPhoto($photoUrl);
            $manager->persist($inter);
        }

        // Permet de créer 5 tâches
        for ($i = 0; $i < 5; $i++) {
            $task = new Task();
            $task->setTitle("Une tâche");
            $task->setDescription("Description de la tâche");
            $task->setDueDate($faker->dateTime);
            $task->setPriority(false);
            $randomPoleName = $poleNames[array_rand($poleNames)];
            $pole = $manager->getRepository(Pole::class)->findOneBy(['namePole' => $randomPoleName]);
            $task->setPole($pole);
            $randomStatus = $typeStatus[array_rand($typeStatus)];
            $status = $manager->getRepository(Status::class)->findOneBy(['typeStatus' => $randomStatus]);
            $task->setStatus($status);
            $task->setCreatedBy($user);
            $manager->persist($task);
        }

        // Permet de créer 5 projets
        for ($i = 0; $i < 5; $i++) {
            $project = new Project();
            $project->setTitle("Un nouveau projet " . + $i);
            $project->setDescription("Description du projet " . + $i);
            $randomStatus = $typeStatus[array_rand($typeStatus)];
            $status = $manager->getRepository(Status::class)->findOneBy(['typeStatus' => $randomStatus]);
            $project->setStatus($status);
            $project->setDate($faker->dateTime);
            $randomPoleName = $poleNames[array_rand($poleNames)];
            $pole = $manager->getRepository(Pole::class)->findOneBy(['namePole' => $randomPoleName]);
            $project->setPole($pole);
            $manager->persist($project);
        }

        // Permet de créer 3 sociétés
        for ($i = 0; $i < 3; $i++) {
            $company = new Company();
            $company->setName($faker->company);
            $company->setAddress($faker->address);
            $company->setTelephone($faker->phoneNumber);
            $company->setMail($faker->email);
            $manager->persist($company);
        }

        $manager->flush();
    }
}
