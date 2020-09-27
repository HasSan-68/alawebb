<?php

namespace App\Controller;

use App\Entity\Meno;
use App\Form\MenoType;
use App\Repository\MenoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/meno")
 */
class MenoController extends AbstractController
{
    /**
     * @Route("/", name="meno_index", methods={"GET"})
     */
    public function index(MenoRepository $menoRepository): Response
    {
        return $this->render('meno/index.html.twig', [
            'menos' => $menoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="meno_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $meno = new Meno();
        $form = $this->createForm(MenoType::class, $meno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($meno);
            $entityManager->flush();

            return $this->redirectToRoute('meno_index');
        }

        return $this->render('meno/new.html.twig', [
            'meno' => $meno,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="meno_show", methods={"GET"})
     */
    public function show(Meno $meno): Response
    {
        return $this->render('meno/show.html.twig', [
            'meno' => $meno,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="meno_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Meno $meno): Response
    {
        $form = $this->createForm(MenoType::class, $meno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meno_index');
        }

        return $this->render('meno/edit.html.twig', [
            'meno' => $meno,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="meno_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Meno $meno): Response
    {
        if ($this->isCsrfTokenValid('delete'.$meno->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($meno);
            $entityManager->flush();
        }

        return $this->redirectToRoute('meno_index');
    }
}
