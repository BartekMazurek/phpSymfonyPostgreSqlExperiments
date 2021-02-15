<?php

declare(strict_types=1);

namespace App\Entity\Main;

use App\Repository\Main\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass=UserRepository::class
 * )
 * @ORM\Table(
 *     name="`users`",
 *     schema="public"
 * )
 */
class User
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
    private string $firstname;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=50
     * )
     */
    private string $lastname;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=100
     * )
     */
    private string $email;

    /**
     * @ORM\Column(
     *     type="datetime"
     * )
     */
    private \DateTimeInterface $createdAt;

    /**
     * @ORM\Column(
     *     type="datetime"
     * )
     */
    private \DateTimeInterface $modifiedAt;

    /**
     * @ORM\ManyToOne(
     *     targetEntity=UserType::class
     * )
     * @ORM\JoinColumn(
     *     nullable=false
     * )
     */
    private UserType $userType;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getModifiedAt(): \DateTimeInterface
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(\DateTimeInterface $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

    public function getUserType(): UserType
    {
        return $this->userType;
    }

    public function setUserType(UserType $userType): void
    {
        $this->userType = $userType;
    }
}
