<?php

namespace App\Repository;

use App\Entity\GiteOptionsPrix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GiteOptionsPrix|null find($id, $lockMode = null, $lockVersion = null)
 * @method GiteOptionsPrix|null findOneBy(array $criteria, array $orderBy = null)
 * @method GiteOptionsPrix[]    findAll()
 * @method GiteOptionsPrix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GiteOptionsPrixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GiteOptionsPrix::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(GiteOptionsPrix $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(GiteOptionsPrix $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return GiteOptionsPrix[] Returns an array of GiteOptionsPrix objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GiteOptionsPrix
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
