<?php

namespace App\Repository;

use App\Entity\Trajet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trajet>
 */
class TrajetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trajet::class);
    }


    public function findTrajets($criteria)
    {
        $qb = $this->createQueryBuilder('t');

        // Filtre par ville de départ
        if (!empty($criteria['villeDepart'])) {
            $qb->andWhere('t.villeDepart LIKE :villeDepart')
               ->setParameter('villeDepart', '%' . $criteria['villeDepart'] . '%');
        }

        // Filtre par ville d'arrivée
        if (!empty($criteria['villeArrivee'])) {
            $qb->andWhere('t.villeArrivee LIKE :villeArrivee')
               ->setParameter('villeArrivee', '%' . $criteria['villeArrivee'] . '%');
        }

        // Filtre par date de départ
        if (!empty($criteria['dateDepart'])) {
            $qb->andWhere('t.dateDepart = :dateDepart')
               ->setParameter('dateDepart', $criteria['dateDepart']);
        }

        return $qb->getQuery()->getResult();
    }

    

    //    /**
    //     * @return Trajet[] Returns an array of Trajet objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Trajet
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
