<?php

declare(strict_types=1);

namespace App\Repository\Shop;

use App\Entity\Shop\ProductSubcategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductSubcategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductSubcategory::class);
    }
}
