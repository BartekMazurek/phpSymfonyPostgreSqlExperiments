<?php

declare(strict_types=1);

namespace App\Entity\Shop;

use App\Repository\Shop\ProductCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass=ProductCategoryRepository::class
 * )
 * @ORM\Table(
 *     name="`product_category`",
 *     schema="shop"
 * )
 */
class ProductCategory
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
