<?php

namespace App\Controller;
use App\Repository\AvionRepository;
use App\Repository\InterventionRepository;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


class InterventionController extends AbstractController
{
    #[Route('/', name: 'app_intervention')]
    public function index(): Response
    {
        return $this->render('intervention/index.html.twig', [
            
        ]);
    }

    // Page pour toute les interventions
    #[Route('/liste-intervention', name: 'liste_intervention')]
    public function liste(
        InterventionRepository $interventionRepository, 
        AvionRepository $avionRepository
        ): Response
    {
        $interventions = $interventionRepository->findAll();
        $avions = $avionRepository->findAll();
        
        return $this->render('intervention/liste.html.twig', [
            'interventions'=> $interventions,
            'avions'=> $avions,
        ]);
    }

    // Page pour chaque intervention
    #[Route('/intervention/{id}', name:'intervention', methods:['GET', 'POST'])]
    public function interventionDetail(
        int $id, 
        InterventionRepository $interventionRepository, 
        AvionRepository $avionRepository,
        Request $request, 
        EntityManagerInterface $em
        ): Response
    {
        $intervention = $interventionRepository->find($id);
        //vérifier si intervention existe
        if (!$intervention) {
            throw $this->createNotFoundException("Cette intervention n'existe pas");
        }

        if ($request->isMethod("POST")) {
            $intervention->setInterventionDateDebut
            (new \DateTime($request->request->get ('date_debut')));
            $intervention->setInterventionDateFin
            (new \DateTime($request->request->get ('date_fin')));
            $intervention->setInterventionType
            ($request->request->get('type'));
            $intervention->setInterventionCommentaire
            ($request->request->get('commentaire'));
            
            $em -> flush();
            return $this->redirectToRoute('intervention/{id}');
        }

        return $this->render("intervention/interventionDetail.html.twig", [
            'intervention'=>$intervention
        ]);
    }

    #[Route('/intervention/{id}/delete', name: 'intervention_delete', methods: ['POST'])]
    public function delete(
        int $id, 
        InterventionRepository $interventionRepository, 
        EntityManagerInterface $entityManager
        ): Response
    {
        $intervention = $interventionRepository->find($id);

        if (!$intervention) {
            throw $this->createNotFoundException("L'intervention avec l'id $id n'existe pas.");
        }

        $entityManager->remove($intervention);
        $entityManager->flush();
        return $this->redirectToRoute('liste_intervention');

    }

}