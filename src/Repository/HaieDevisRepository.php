<?php

namespace App\Repository;

use App\Entity\HaieDevis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HaieDevis|null find($id, $lockMode = null, $lockVersion = null)
 * @method HaieDevis|null findOneBy(array $criteria, array $orderBy = null)
 * @method HaieDevis[]    findAll()
 * @method HaieDevis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HaieDevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HaieDevis::class);
    }

    // /**
    //  * @return HaieDevis[] Returns an array of HaieDevis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HaieDevis
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
