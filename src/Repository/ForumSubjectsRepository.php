<?php

namespace App\Repository;

use App\Entity\ForumSubjects;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ForumSubjects|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumSubjects|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumSubjects[]    findAll()
 * @method ForumSubjects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumSubjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ForumSubjects::class);
    }

    // /**
    //  * @return ForumSubjects[] Returns an array of ForumSubjects objects
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
    public function findOneBySomeField($value): ?ForumSubjects
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
