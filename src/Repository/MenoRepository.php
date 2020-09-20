<?php

namespace App\Repository;

use App\Entity\Meno;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Meno|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meno|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meno[]    findAll()
 * @method Meno[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MenoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Meno::class);
    }

    // /**
    //  * @return Meno[] Returns an array of Meno objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Meno
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
