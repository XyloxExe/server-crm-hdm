<?php

namespace App\Repository;

use App\Entity\StatusClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StatusClient>
 *
 * @method StatusClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatusClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatusClient[]    findAll()
 * @method StatusClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatusClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatusClient::class);
    }

//    /**
//     * @return StatusClient[] Returns an array of StatusClient objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StatusClient
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
