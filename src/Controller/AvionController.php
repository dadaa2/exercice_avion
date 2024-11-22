<?php
namespace App\Controller;

use App\Repository\AvionRepository;
use App\Repository\InterventionRepository;
use App\Entity\Intervention;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InterventionAjoutType;
class AvionController extends AbstractController
{
    #[Route('/avion', name: 'app_avion_index')]
    public function index(): Response
    {
        return $this->render('avion/index.html.twig', [
        ]);
    }

    #[Route('/avion/{id}', name: 'app_avion')]
    public function avionDetail(
        string $id,
        AvionRepository $avionRepository,
        InterventionRepository $interventionRepository,
        Request $request,
        EntityManagerInterface $em,
    ): Response {
        // check si avion et ses intervention existe
        $avion = $avionRepository->find($id);
        $interventions = $interventionRepository->findBy(['avion' => $avion]);
        if (!$avion) {
            throw $this->createNotFoundException("Cette avion n'existe pas");
        }
      
        // Partie pour ajouter une intervention à cette avion
        $ajoutIntervention = new Intervention();
        $ajoutIntervention->setInterventionAvion($avion); // Lier l'intervention à l'avion
        $ajoutInterventionForm = $this->createForm(InterventionAjoutType::class, $ajoutIntervention);
        
        $ajoutInterventionForm->handleRequest($request);
        if ($ajoutInterventionForm->isSubmitted() && $ajoutInterventionForm->isValid()) {
            dump($ajoutIntervention);
            $ajoutIntervention->setInterventionDateCreation(new \DateTime());
            try {
                $em->persist($ajoutIntervention);
                $em->flush();
                
                $this->addFlash('success', 'L\'intervention a été ajoutée avec succès');
                
                return $this->redirectToRoute('app_avion_detail', [
                    'id' => $avion->getImmatriculation()
                ]);
            } catch (\Exception $e) {
                $this->addFlash('error', "Une erreur est survenue lors de l'enregistrement : ". $e->getMessage());
                error_log($e->getTraceAsString());
            } 
            } elseif ($ajoutInterventionForm->isSubmitted()) {
                foreach ($ajoutIntervention->getErrors(True) as $error){
                    $this->addFlash('error', $error->getMessage());
                }
            }

        return $this->render('avion/avionDetail.html.twig', [
            'avion' => $avion,
            'interventions' => $interventions,
            'ajoutIntervention' => $ajoutInterventionForm->createView(),
        ]);
    }
}