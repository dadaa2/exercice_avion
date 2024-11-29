<?php

namespace App\Controller;

use App\Entity\Avion;
use App\Repository\AvionRepository;
use App\Form\AvionSearchType;
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
        
    ): Response
    {

        $avion = new Avion();
        $form = $this->createForm(AvionSearchType::class, $avion);
        $form->handleRequest($request);
        //Lier à une form 
        $immatriculation = $form->get('immatriculation')->getData();
        $companie = $form->get('AvionCompanie')->getData();
        $statue = $form->get('AvionStatue')->getData();
        
        if ($form->isSubmitted() && $form->isValid()) {
            dd($form, $immatriculation, $companie, $statue);
            //return $this->redirectToRoute('app_avion_index', [], Response::HTTP_SEE_OTHER);
        }

        //$avions = $avionRepository->findBy([
        //    'immatriculation'=> $immatriculation,
        //    'company'=> $companie,
        //]);

        return $this->render('search/index.html.twig', [
            'form' => $form,

        ]);
    }

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
