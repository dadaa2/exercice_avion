<?php

namespace App\Controller;
use App\Repository\AvionRepository;
use App\Repository\InterventionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class InterventionController extends AbstractController
{
    #[Route('/', name: 'app_intervention')]
    public function index(): Response
    {
        return $this->render('intervention/index.html.twig', [
            
        ]);
    }

    #[Route('/liste-intervention', name: 'liste_interventions')]
    public function liste(InterventionRepository $interventionRepository, AvionRepository $avionRepository): Response
    {
        $interventions = $interventionRepository->findAll();
        $avions = $avionRepository->findAll();
        
        return $this->render('intervention/liste.html.twig', [
            'interventions'=> $interventions,
            'avions'=> $avions
        ]);
    }
}
