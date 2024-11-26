<?php

namespace App\Controller;

use App\Repository\StatuesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Statues;
use App\Form\StatuesType;


#[Route('/statues', name: 'app_statues_')]
class StatuesController extends AbstractController
{
    #[Route('/', name: 'liste_statues')]
    public function index(
        StatuesRepository $statuesRepository,
    ): Response
    {
        $statues = $statuesRepository->findAll();
        //dd(vars: $statues);

        return $this->render('statues/index.html.twig', [
            'statues' => $statues,
        ]);
    }

    #[Route('/add', name:'add', methods: ['GET', 'POST'])]
    public function add(
        Statues $statues,
        ): Response
        {
            $statue = new Statues();
            $statueForm = $this->createForm(StatuesType::class, $statues);

            return $this->render('statues/add.html.twig', [
                'statueForm' => $statueForm->createView(),
            ]);
        }
}
