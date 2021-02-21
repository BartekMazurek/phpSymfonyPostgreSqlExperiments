<?php

declare(strict_types=1);

namespace App\Entity\Main;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\Main\UserViewRepository;

/**
 * @ORM\Entity(
 *     repositoryClass=UserViewRepository::class,
 *     readOnly=true
 * )
 * @ORM\Table(
 *     name="`v_users`",
 *     schema="public",
 * )
 */
class UserView
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(
     *     type="integer"
     * )
     */
    private int $id;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=50
     * )
     */
    private string $userFullName;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=50
     * )
     */
    private string $userTypeName;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserFullName(): string
    {
        return $this->userFullName;
    }

    public function setUserFullName(string $userFullName): void
    {
        $this->userFullName = $userFullName;
    }

    public function getUserTypeName(): string
    {
        return $this->userTypeName;
    }

    public function setUserTypeName(string $userTypeName): void
    {
        $this->userTypeName = $userTypeName;
    }
}
