<?php

namespace App\Repository;

use App\Entity\ForumReponses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ForumReponses|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForumReponses|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForumReponses[]    findAll()
 * @method ForumReponses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumReponsesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ForumReponses::class);
    }

    // /**
    //  * @return ForumReponses[] Returns an array of ForumReponses objects
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
    public function findOneBySomeField($value): ?ForumReponses
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
