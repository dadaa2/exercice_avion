<?php

namespace App\Controller;

use App\Entity\Statues;
use App\Form\StatuesType;
use App\Repository\StatuesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Component\Serializer\SerializerInterface;

#[Route('/statues')]
final class StatuesController extends AbstractController
{
    #[Route(name: 'app_statues_index', methods: ['GET'])]
    public function index(
        StatuesRepository $statuesRepository,
        SerializerInterface $serializer,
        ): Response
    {
        $jsonStatues = $statuesRepository->findAll();
        $jsonContent = $serializer->serialize($jsonStatues, 'json');
        return $this->render('statues/index.html.twig', [
            'statues' => $statuesRepository->findAll(),
            JsonResponse::fromJsonString($jsonContent)
        ]);
    }

    #[Route('/new', name: 'app_statues_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $statue = new Statues();
        $form = $this->createForm(StatuesType::class, $statue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($statue);
            $entityManager->flush();

            return $this->redirectToRoute('app_statues_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('statues/new.html.twig', [
            'statue' => $statue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_statues_show', methods: ['GET'])]
    public function show(Statues $statue): Response
    {
        return $this->render('statues/show.html.twig', [
            'statue' => $statue,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_statues_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Statues $statue, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StatuesType::class, $statue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_statues_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('statues/edit.html.twig', [
            'statue' => $statue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_statues_delete', methods: ['POST'])]
    public function delete(Request $request, Statues $statue, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$statue->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($statue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_statues_index', [], Response::HTTP_SEE_OTHER);
    }
}
