<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Main\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserTypeFixtures extends Fixture
{
    private const ADMINISTRATOR = 'Administrator';
    private const EMPLOYEE = 'Employee';
    private const CLIENT = 'Client';

    private const USER_TYPE_NAMES = [
        self::ADMINISTRATOR,
        self::EMPLOYEE,
        self::CLIENT,
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::USER_TYPE_NAMES as $userTypeName) {
            $userType = new UserType();
            $userType->setName($userTypeName);

            $manager->persist($userType);
        }
        $manager->flush();
    }
}
