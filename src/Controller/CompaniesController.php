<?php

namespace App\Controller;

use App\Entity\Companies;
use App\Form\CompaniesType;
use App\Repository\CompaniesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/companies', name: 'app_companies')]
class CompaniesController extends AbstractController
{
    #[Route('/', name: 'app_companies')]
    public function index(
        CompaniesRepository $companiesRepository,
    ): Response
    {
        $companies = $companiesRepository->findAll();
        
        return $this->render('companies/index.html.twig', [
            'companies' => $companies,
        ]);
    }
    
    #[Route('/add', name: 'add')]
    public function add(
        CompaniesRepository $companiesRepository,
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        ): Response
        {   
        $companies = new Companies();
        $companiesForm = $this->createForm(CompaniesType::class, $companies);
        $companiesForm->handleRequest($request);
        
        $entityManagerInterface->persist($companies);
        $entityManagerInterface->flush();
        
        return $this->renderForm('companies/add.html.twig', compact('companiesForm'));
    }

    #[Route('/edit/{id}', name: 'edit')]
    public function edit(
        Companies $companies,
        CompaniesRepository $companiesRepository,
        Request $request,
        EntityManagerInterface $entityManagerInterface,
        ): Response
        {   
        $companiesForm = $this->createForm(CompaniesType::class, $companies);
        $companiesForm->handleRequest($request);

        $entityManagerInterface->persist($companies);
        $entityManagerInterface->flush();
        
        return $this->renderForm('companies/edit.html.twig', compact('companiesForm'));
    }


}
