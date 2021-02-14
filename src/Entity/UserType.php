<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\UserTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass=UserTypeRepository::class
 * )
 * @ORM\Table(
 *     name="`user_type`",
 *     schema="public"
 * )
 */
class UserType
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
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
