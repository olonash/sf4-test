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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class AdminController extends Controller
{

    /**
     * Insertion en base de donné avec formulaire
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        /** recuperer l'utilisateur connecté */
        $this->getUser();
        return $this->render('Admin/index.html.twig', []);
    }

    /**
     *
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function accesAvecRole(Request $request)
    {
        if ($this->isGranted("ROLE_EDITEUR")) {
            //traitement
        }
        /** recuperer l'utilisateur connecté */
        $this->getUser();
        return $this->render('Admin/index.html.twig', []);
    }
}