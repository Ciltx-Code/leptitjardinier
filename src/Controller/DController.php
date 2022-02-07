<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\Devis1Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/d")
 */
class DController extends AbstractController
{
    /**
     * @Route("/", name="d_index", methods={"GET"})
     */
    public function index(): Response
    {
        $devis = $this->getDoctrine()
            ->getRepository(Devis::class)
            ->findAll();

        return $this->render('d/index.html.twig', [
            'devis' => $devis,
        ]);
    }

    /**
     * @Route("/new", name="d_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $devi = new Devis();
        $form = $this->createForm(Devis1Type::class, $devi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($devi);
            $entityManager->flush();

            return $this->redirectToRoute('d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('d/new.html.twig', [
            'devi' => $devi,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="d_show", methods={"GET"})
     */
    public function show(Devis $devi): Response
    {
        return $this->render('d/show.html.twig', [
            'devi' => $devi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="d_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Devis $devi): Response
    {
        $form = $this->createForm(Devis1Type::class, $devi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('d_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('d/edit.html.twig', [
            'devi' => $devi,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="d_delete", methods={"POST"})
     */
    public function delete(Request $request, Devis $devi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$devi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($devi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('d_index', [], Response::HTTP_SEE_OTHER);
    }
}
