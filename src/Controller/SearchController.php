<?php

namespace App\Controller;

use App\Entity\Avion;
use App\Repository\AvionRepository;
use App\Form\AvionType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(
        Request $request,
        PaginatorInterface $paginator,
        AvionRepository $avionRepository,
        
    ): Response
    {

        $avion = new Avion();
        $form = $this->createForm(AvionType::class, $avion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {    
            $avions = $paginator->paginate(
                $avion->findBy([
                    'immatriculation'=> '',
                    'companie'=> ''
                    ]
                ), // parametre à mettre pour find, crée par la form
                $request->query->getInt('page', 1),15);
        }
 // lier l'entité avion avec avion repository pour que paginator le trouve 
        return $this->render('search/index.html.twig', [
            'form' => $form,
        ]);
    }



}
