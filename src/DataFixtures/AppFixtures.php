<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Phone;
use App\Entity\UserClient;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $brand = ['iPhone', 'Samsung', 'Oppo', 'Xiaomi'];

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        // create role admin
        $admin = new User();
        $password = $this->passwordHasher->hashPassword($admin, '123');
        $admin->setUsername('Chester.Dicki')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($password);
        $manager->persist($admin);
        // create role user
        $user = new User();
        $password2 = $this->passwordHasher->hashPassword($user, '123');
        $user->setUsername('Jonathon.Roob39')
            ->setPassword($password2);
        $manager->persist($user);
        // create phones
        for ($i = 1; $i <= 40; $i++) {
            $phone = new Phone();
            $phoneBrand = $this->brand[rand(0, 3)];
            $phone->setPrice(rand(500, 1000))
                ->setYear($faker->dateTime())
                ->setBrand($phoneBrand)
                ->setName($phoneBrand . ' ' . rand(5, 13));

            $manager->persist($phone);
        }
        // create clients by user
        for ($i = 1; $i <= 20; $i++) {
            $userClient = new UserClient();
            $userClient->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setUser($user);

            $manager->persist($userClient);
        }
        // create clients by admin
        for ($i = 1; $i <= 20; $i++) {
            $userClient = new UserClient();
            $userClient->setFirstname($faker->firstName())
                ->setLastname($faker->lastName())
                ->setUser($admin);

            $manager->persist($userClient);
        }

        $manager->flush();
    }
}
