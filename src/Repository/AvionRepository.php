<?php

namespace App\Repository;

use App\Entity\Avion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avion>
 */
class AvionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avion::class);
    }

//    /**
//     * @return Avion[] Returns an array of Avion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Avion
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
//

    public function findAvionSearch($form): array 
    {
        $immatriculation = $form->get('immatriculation')->getData();
 
        return $this->createQueryBuilder('a')
            ->where("a.immatriculation LIKE :immatriculation")
            ->setParameter("immatriculation", '%'.$immatriculation.'%')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findSpecificAvion($form): array
    {
        $immatriculation = $form->getImmatriculation();
        
        $companie = $form->getAvionCompanie();
        if ($companie != null){
            $companie = $companie->getCompanieNom();
        } else {
            $companie = "";
        }




        return $this->createQueryBuilder('a')
            ->andwhere("a.immatriculation LIKE :immatriculation OR c.companieNom LIKE :immatriculation")
            ->setParameter("immatriculation", '%'.$immatriculation.'%')

            //->andWhere("c.companieNom LIKE :immatriculation")
            ->innerJoin("a.AvionCompanie", "c")
            
            
            //->innerJoin("a.AvionCompanie", "c")
            //->andWhere("c.companieNom LIKE :companie")
            //->setParameter("companie", '%'.$companie.'%')
            
            ->orderBy("a.immatriculation","ASC")
            ->getQuery()
            ->getResult();
    }
}
