<?php

namespace App\Repository;

use App\Entity\AdminSalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdminSalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminSalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminSalle[]    findAll()
 * @method AdminSalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminSalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminSalle::class);
    }

    // /**
    //  * @return AdminSalle[] Returns an array of AdminSalle objects
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
    public function findOneBySomeField($value): ?AdminSalle
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
