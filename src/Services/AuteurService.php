<?php
/**
 * Created by PhpStorm.
 * User: nasolo
 * Date: 14/12/19
 * Time: 10:59
 */

namespace App\Services;


use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManager;

class AuteurService
{
    //const SERVICE_NAME = "service.auteur";

    private $mg;

    function __construct(MessageGenerator $mg)
    {
        $this->mg = $mg;

        return $this;
    }

    function ajout ($request, $form, $repository)
    {
        $message = '';
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $auteur contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes
            if ($form->isSubmitted() && $form->isValid()) {
                $_auteur = $form->getData();
                $repository->saveAndFlush($_auteur);
                $message = $this->mg->succes();
            }
        }

        return $message ;
    }
}