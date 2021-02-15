<?php

declare(strict_types=1);

namespace App\Entity\Shop;

use App\Repository\Shop\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass=ProductRepository::class
 * )
 * @ORM\Table(
 *     name="`products`",
 *     schema="shop"
 * )
 */
class Product
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

    /**
     * @ORM\Column(
     *     type="text"
     * )
     */
    private string $description;

    /**
     * @ORM\Column(
     *     type="integer"
     * )
     */
    private int $amount;

    /**
     * @ORM\Column(
     *     type="float"
     * )
     */
    private float $price;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
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
}
