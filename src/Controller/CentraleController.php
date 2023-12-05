<?php

namespace App\Controller;

use App\Entity\Centrale;
use App\Form\CentraleType;
use App\Repository\CentraleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/centrale')]
class CentraleController extends AbstractController
{
    #[Route('/', name: 'app_centrale_index', methods: ['GET'])]
    public function index(CentraleRepository $centraleRepository): Response
    {
        return $this->render('centrale/index.html.twig', [
            'centrales' => $centraleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_centrale_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $centrale = new Centrale();
        $form = $this->createForm(CentraleType::class, $centrale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($centrale);
            $entityManager->flush();

            return $this->redirectToRoute('app_centrale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('centrale/new.html.twig', [
            'centrale' => $centrale,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_centrale_show', methods: ['GET'])]
    public function show(Centrale $centrale): Response
    {
        return $this->render('centrale/show.html.twig', [
            'centrale' => $centrale,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_centrale_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Centrale $centrale, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CentraleType::class, $centrale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_centrale_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('centrale/edit.html.twig', [
            'centrale' => $centrale,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id}', name: 'app_centrale_delete', methods: ['POST'])]
    public function delete(Request $request, Centrale $centrale, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$centrale->getId(), $request->request->get('_token'))) {
            $entityManager->remove($centrale);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_centrale_index', [], Response::HTTP_SEE_OTHER);
    }
}
