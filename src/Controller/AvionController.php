<?php

namespace App\Controller;

use App\Repository\AvionRepository;
use App\Repository\InterventionRepository;
use App\Repository\StatuesRepository;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Form\InterventionAjoutType;
class AvionController extends AbstractController
{
    #[Route('/avion', name: 'app_avion')]
    public function index(): Response
    {
        return $this->render('avion/index.html.twig', [
        ]);
    }

    #[Route('/avion/{id}', name: 'app_avion')]
    public function avionDetail(    string $id,
                                    AvionRepository $avionRepository,
                                    StatuesRepository $statuesRepository,
                                    InterventionRepository $interventionRepository ,
                                    Request $request, 
                                    EntityManagerInterface $em
                                ): Response
    {
        //check si avion existe
        $statues = $statuesRepository->findAll();
        $avion = $avionRepository->find($id);
        $interventions = $interventionRepository->findBy(['avion' => $avion]);
        if (!$avion) {
            throw $this->createNotFoundException("Cette avion n'existe pas");
        }
        
    return $this->render('avion/avionDetail.html.twig', [
        'avion' => $avion,
        'statues' => $statues,
        'interventions' => $interventions

        ]);
    }

    
    public function Addintervention(    InterventionAjoutType $intervention, 
                                        Request $request, 
                                        EntityManagerInterface $em
                                        ): Response
    {
        return $this->render('app_name', [
            
        ]);

    }
}
