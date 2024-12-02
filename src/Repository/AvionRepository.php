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
        
        //$companie = $form["AvionCompanie"]->getData();


        $companie = $form->getAvionCompanie();
        $statue = $form->getAvionStatue();


        if ($companie != null){
            return $companie = $companie->getCompanieNom();
        }
        dd($form, $immatriculation, $companie, $statue);
        
        if ($statue != null){
            return $statue = $statue->getStatueNom(); 
        }
        

        //$statue = $form['AvionStatue']->getData();
        //$statue = $statue->getStatueNom();
        
    

        //if ($companie === "Toutes les compagnies"){
        //        return $dqlcompanie = '';
        //    }else{
        //        return $dqlcompanie = 'INNER JOIN a.immatriculation ON Companies = companies.nom';
        //}
        //if ($statue === "Tout type de status"){
        //    return $dqlstatue = '';
        //} else {
        //    return $sqlstatue == 'INNER JOIN a.immatriculation ON Staues.nomtues = Stat';
        //}

        return $this->createQueryBuilder('a')
            ->andwhere("a.immatriculation LIKE :immatriculation  ")
            ->setParameter("immatriculation", '%'.$immatriculation.'%')
            
            ->join("avion.avionCompanie", "c")
            ->andWhere("c.companieNom LIKE : companie ")
            ->setParameter("companie", '%'.$companie.'%')
            
            
            
            
            //->andWhere("a.avionStatue LIKE : statue")
            //->setParameter("statue", '%'.$statue.'%')
            ->getQuery()
            ->getResult();
    }
    
}
