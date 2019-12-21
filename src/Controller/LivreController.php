<?php
/**
 * Created by PhpStorm.
 * User: nasolo
 * Date: 27/11/19
 * Time: 10:52
 */

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Livre;
use App\Form\Type\AuteurType;
use App\Form\Type\LivreType;
use App\Repository\AuteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LivreController extends AbstractController
{
    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function ajout(Request $request)
    {
        $livre = new Livre();
        /** @var FormInterface $form */
        $form = $this->get('form.factory')->create(
            LivreType::class,
            $livre,
            ['method' => Request::METHOD_POST]
        );

        // Si la requête est en POST
        if ($request->isMethod('POST')) {
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $auteur contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            if ($form->isSubmitted() && $form->isValid()) {
                $_livre= $form->getData();
                $this->getDoctrine()->getRepository(Livre::class)->saveAndFlush($_livre);
                $this->redirectToRoute('auteur_liste');
            }
        }

        $liste = [];
        return $this->render('Livre/form.html.twig', [
            'formulaire' => $form->createView(),
            'liste' => $liste
            ]);
    }


    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function liste(Request $request)
    {
        $liste = $this->getDoctrine()->getRepository(Livre::class)->findAll();
        return $this->render('Livre/liste.html.twig', [
            'liste' => $liste
        ]);
    }

    /**
     *
     * @return JsonResponse
     */
    public function editer(Request $request)
    {
        $livre = $this->getDoctrine()->getRepository(Livre::class)->find($request->get('id'));
        //creation formulaire
        /** @var FormInterface $form */
        $form = $this->get('form.factory')->create(
            LivreType::class,
            $livre,
            ['method' => Request::METHOD_POST]
        );

        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $auteur contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            if ($form->isSubmitted() && $form->isValid()) {
                $_livre = $form->getData();
                $this->getDoctrine()->getRepository(Livre::class)->saveAndFlush($_livre);

                $this->redirectToRoute('livre_liste');
            }
        }

        $liste = [];
        return $this->render('Livre/form.html.twig', [
            'formulaire' => $form->createView(),
            'liste' => $liste
        ]);
    }

}