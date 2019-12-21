<?php
/**
 * Created by PhpStorm.
 * User: nasolo
 * Date: 27/11/19
 * Time: 10:52
 */

namespace App\Controller;

use App\Entity\Auteur;
use App\Form\Type\AuteurType;
use App\Services\AuteurService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class AuteurController extends Controller
{
    /**
     * Insertion en base de donné
     * @return JsonResponse
     */
    public function ajout(Request $request)
    {
        $auteur = new Auteur();
        $auteur->setNom('Randianina2');

        $this->getDoctrine()->getRepository(Auteur::class)->saveAndFlush($auteur);
        return new JsonResponse([]);
    }

    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function ajoutAvecForm(Request $request)
    {
        $auteur = new Auteur();
        /** @var FormInterface $form */
        $form = $this->get('form.factory')->create(
            AuteurType::class,
            $auteur,
            ['method' => Request::METHOD_POST]
        );

        // Si la requête est en POST
        if ($request->isMethod('POST')) {
        // On fait le lien Requête <-> Formulaire
        // À partir de maintenant, la variable $auteur contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            if ($form->isSubmitted() && $form->isValid()) {
                $_auteur = $form->getData();
                $this->getDoctrine()->getRepository(Auteur::class)->saveAndFlush($_auteur);
                $this->redirectToRoute('auteur_liste');
            }
        }

        $liste = [];
        return $this->render('Auteur/auteur.html.twig', [
            'formulaire' => $form->createView(),
            'liste' => $liste
            ]);
    }


    /**
     *
     * @return JsonResponse
     */
    public function editer(Request $request)
    {
        $auteur = $this->getDoctrine()->getRepository(Auteur::class)->find($request->get('id'));
        //creation formulaire
        /** @var FormInterface $form */

        $form = $this->get('form.factory')->create(
            AuteurType::class,
            $auteur,
            ['method' => Request::METHOD_POST]
        );

        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $auteur contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            if ($form->isSubmitted() && $form->isValid()) {
                $_auteur = $form->getData();
                $this->getDoctrine()->getRepository(Auteur::class)->saveAndFlush($_auteur);

                $this->redirectToRoute('auteur_liste');
            }
        }

        $liste = [];
        return $this->render('Auteur/auteur.html.twig', [
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
        $liste = $this->getDoctrine()->getRepository(Auteur::class)->findAll();
        return $this->render('Auteur/liste.html.twig', [
            'liste' => $liste
            ]);
    }

    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function supprimer(Request $request)
    {
        $auteur = $this->getDoctrine()->getRepository(Auteur::class)->find($request->get('id'));
        $this->getDoctrine()->getRepository(Auteur::class)->delete($auteur);

        return $this->redirectToRoute('auteur_liste');
    }

    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function utilisationService(Request $request, AuteurService $au)
    {

        $auteur = new Auteur();

        /** @var FormInterface $form */
        $form = $this->get('form.factory')->create(
            AuteurType::class,
            $auteur,
            ['method' => Request::METHOD_POST]
        );

        /** reccuperation variable parameters un config */
        //dd($this->getParameter('ma_variable'), $this->getParameter('une_autre_variable'));

        /**@var $srv AuteurService **/
        //$srv = $this->get('auteur_srv');

        //dd(sha1('123456'));
        var_dump(json_encode(['ROLE_USER'])); die;

        $message = $au->ajout($request, $form, $this->getDoctrine()->getRepository(Auteur::class));

        $liste = [];
        return $this->render('Auteur/auteur.html.twig', [
            'formulaire' => $form->createView(),
            'liste' => $liste,
            'message' => 'ererezrzrzrz'
        ]);
    }


}