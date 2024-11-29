<?php

namespace App\Controller;

use App\Entity\Avion;
use App\Repository\AvionRepository;
use App\Form\AvionSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/search')]
class SearchController extends AbstractController
{
    // lier l'entité avion avec avion repository pour que paginator le trouve  ??
    #[Route(name: 'app_search')]
    public function index(
        Request $request,
        PaginatorInterface $paginator,
        AvionRepository $avionRepository,
        EntityManagerInterface $em
        
    ): Response
    {
        $avion = new Avion();
        $form = $this->createForm(AvionSearchType::class, $avion);
        $form->handleRequest($request);
        //Lier à une form 
        $immatriculation = $form->get('immatriculation')->getData();
        $companie = $form->get('AvionCompanie')->getData();
        $statue = $form->get('AvionStatue')->getData();
        
        $qb = $em->createQueryBuilder();
       
        
        if ($form->isSubmitted() && $form->isValid()) {
            //dd($immatriculation );
            $qb->select('*')
            ->from('Avion','a')
            ->where('a.immatriculation = '."'". $immatriculation ."'");
            $query = $qb->getQuery();

            dd($qb, $query);
            return $query->execute();
            //$avions = $avionRepository->findBy([
            //    'immatriculation' => $immatriculation,
            //    'form' => $form->createview()]);
            //    //'company' => $companie,
            //    //'status' => $status, 
            //    return $this->redirectToRoute('app_search', [], Response::HTTP_SEE_OTHER);
            //;
        }
        return $this->render('search/index.html.twig', [
            'form' => $form,
        ]);
    }

//SELECT * FROM avion WHERE immatriculation LIKE '%AM%' 
//LEFT JOIN companies on avions.avion_companie_id = companie.id

    #[Route('/result', name: 'app_search_result')]
    public function show(
        Request $request,
        PaginatorInterface $paginator,
        AvionRepository $avionRepository,
        
    ): Response
    {

        return $this->render('search/index.html.twig', [

        ]);
    }



}
