<?php

declare(strict_types=1);

namespace App\Entity\Shop;

use App\Repository\Shop\ProductSubcategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(
 *     repositoryClass=ProductSubcategoryRepository::class
 * )
 * @ORM\Table(
 *     name="`product_subcategory`",
 *     schema="shop"
 * )
 */
class ProductSubcategory
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
     * @ORM\ManyToOne(
     *     targetEntity=ProductCategory::class
     * )
     * @ORM\JoinColumn(
     *     nullable=false
     * )
     */
    private ProductCategory $productCategory;

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
