<?php

namespace App\Repository;

use App\Entity\ForumsSubjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ForumsSubjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumsSubjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumsSubjects[]    findAll()
 * @method ForumsSubjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumsSubjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ForumsSubjects::class);
    }

    // /**
    //  * @return ForumsSubjects[] Returns an array of ForumsSubjects objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ForumsSubjects
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
