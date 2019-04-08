<?php

namespace App\Repository;

use App\Entity\Arcticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Arcticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arcticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arcticle[]    findAll()
 * @method Arcticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArcticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Arcticle::class);
    }

    // /**
    //  * @return Arcticle[] Returns an array of Arcticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Arcticle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
