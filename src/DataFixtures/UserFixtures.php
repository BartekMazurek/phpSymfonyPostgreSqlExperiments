<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Main\User;
use App\Repository\Main\UserTypeRepository;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    private UserTypeRepository $userTypeRepository;

    public function __construct(
        UserTypeRepository $userTypeRepository
    ) {
        $this->userTypeRepository = $userTypeRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $userTypes = $this->userTypeRepository->findAll();

        $i = 0;
        foreach ($userTypes as $userType) {

            $user = new User();
            $user->setEmail('user'.$i.'@mail.com');
            $user->setUserType($userType);
            $user->setFirstname('Firstname '.$i);
            $user->setLastname('Lastname '.$i);
            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setModifiedAt(new \DateTimeImmutable());

            $manager->persist($user);
            $i++;
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserTypeFixtures::class
        ];
    }
}
