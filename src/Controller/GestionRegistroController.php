<?php

namespace App\Controller;

use App\Entity\GestionRegistro;
use App\Form\GestionRegistroType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gestion-registro")
 */
class GestionRegistroController extends AbstractController
{
    /**
     * @Route("/", name="gestion_registro_index", methods={"GET"})
     */
    public function index(): Response
    {
        $gestionRegistros = $this->getDoctrine()
            ->getRepository(GestionRegistro::class)
            ->findAll();

        return $this->render('gestion_registro/index.html.twig', [
            'gestion_registros' => $gestionRegistros,
        ]);
    }

    /**
     * @Route("/new", name="gestion_registro_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $gestionRegistro = new GestionRegistro();
        $form = $this->createForm(GestionRegistroType::class, $gestionRegistro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($gestionRegistro);
            $entityManager->flush();

            return $this->redirectToRoute('gestion_registro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_registro/new.html.twig', [
            'gestion_registro' => $gestionRegistro,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="gestion_registro_show", methods={"GET"})
     */
    public function show(GestionRegistro $gestionRegistro): Response
    {
        return $this->render('gestion_registro/show.html.twig', [
            'gestion_registro' => $gestionRegistro,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="gestion_registro_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GestionRegistro $gestionRegistro): Response
    {
        $form = $this->createForm(GestionRegistroType::class, $gestionRegistro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gestion_registro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gestion_registro/edit.html.twig', [
            'gestion_registro' => $gestionRegistro,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="gestion_registro_delete", methods={"POST"})
     */
    public function delete(Request $request, GestionRegistro $gestionRegistro): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gestionRegistro->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($gestionRegistro);
            $entityManager->flush();
        }

        return $this->redirectToRoute('gestion_registro_index', [], Response::HTTP_SEE_OTHER);
    }
}
