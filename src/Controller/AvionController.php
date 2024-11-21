<?php

namespace App\Controller;

use App\Repository\AvionRepository;
use App\Repository\InterventionRepository;
use App\Repository\StatuesRepository;
use App\Entity\Intervention;

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
                                    // InterventionAjoutType $interventionsAjoutType,
                                ): Response
    {
        // check si avion et ses intervention existe
        $avion = $avionRepository->find($id);
        $interventions = $interventionRepository->findBy(['avion' => $avion]);
        if (!$avion) {
            throw $this->createNotFoundException("Cette avion n'existe pas");
        }
        

        // section pour ajouter le formulaire
        // Créer une nouvelle intervention pour cet avion
        $intervention = new Intervention();
        $intervention->setInterventionAvion($avion); // Lier l'intervention à l'avion

        $ajoutIntervention = $this->createForm(InterventionAjoutType::class, $intervention);
        $ajoutIntervention->handleRequest($request);

        // Enregistrer l'intervention dans la base de données
        if ($ajoutIntervention->isSubmitted() && $ajoutIntervention->isValid()) {
            $em->persist($intervention);
            $em->flush();

            // Rediriger pour éviter la soumission multiple
            return $this->redirectToRoute('app_avion', ['id' => $avion->getId()]);
        }

        return $this->render('avion/avionDetail.html.twig', [
            'avion' => $avion,
            'interventions' => $interventions,
            'ajoutIntervention' => $ajoutIntervention->createView()
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
