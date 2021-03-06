<?php

namespace App\Repository;

use App\Entity\Assets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Assets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assets[]    findAll()
 * @method Assets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssetsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Assets::class);
    }

    // /**
    //  * @return Assets[] Returns an array of Assets objects
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
    public function findOneBySomeField($value): ?Assets
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
