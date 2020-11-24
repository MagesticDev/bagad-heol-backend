<?php

namespace App\Repository;

use App\Entity\ForumSubjectsReads;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ForumSubjectsReads|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumSubjectsReads|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumSubjectsReads[]    findAll()
 * @method ForumSubjectsReads[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumSubjectsReadsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ForumSubjectsReads::class);
    }

    // /**
    //  * @return ForumSubjectsReads[] Returns an array of ForumSubjectsReads objects
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
    public function findOneBySomeField($value): ?ForumSubjectsReads
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
