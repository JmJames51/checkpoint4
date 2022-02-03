<?php

namespace App\Controller;

use App\Entity\Assets;
use App\Form\AssetsType;
use App\Repository\AssetsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/assets')]
class AssetsController extends AbstractController
{
    #[Route('/', name: 'assets_index', methods: ['GET'])]
    public function index(AssetsRepository $assetsRepository): Response
    {
        return $this->render('assets/index.html.twig', [
            'assets' => $assetsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'assets_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $asset = new Assets();
        $form = $this->createForm(AssetsType::class, $asset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($asset);
            $entityManager->flush();

            return $this->redirectToRoute('assets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('assets/new.html.twig', [
            'asset' => $asset,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'assets_show', methods: ['GET'])]
    public function show(Assets $asset): Response
    {
        return $this->render('assets/show.html.twig', [
            'asset' => $asset,
        ]);
    }

    #[Route('/{id}/edit', name: 'assets_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Assets $asset, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AssetsType::class, $asset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('assets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('assets/edit.html.twig', [
            'asset' => $asset,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'assets_delete', methods: ['POST'])]
    public function delete(Request $request, Assets $asset, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$asset->getId(), $request->request->get('_token'))) {
            $entityManager->remove($asset);
            $entityManager->flush();
        }

        return $this->redirectToRoute('assets_index', [], Response::HTTP_SEE_OTHER);
    }
}
