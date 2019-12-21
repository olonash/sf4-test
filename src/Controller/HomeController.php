<?php
/**
 * Created by PhpStorm.
 * User: nasolo
 * Date: 27/11/19
 * Time: 10:52
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;

class HomeController extends AbstractController
{

    /**
     * Afficher page twig
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home()
    {
        return $this->render('home/home.html.twig', []);
    }

    /**
     * Retouner json
     * @return JsonResponse
     */
    public function homeJson()
    {
        return new JsonResponse([
            'index'=>"valeur",
            'indexm'=>"valeurm"
        ]);
    }

    /**
     * Retouner json
     * @return JsonResponse
     */
    public function homeDynamic(Request $request)
    {
        $nom = $request->get('anarana');
        $obj = new \stdClass();
        $obj->nom = "Ando";

        return $this->render(
            'home/home.html.twig',
                [
                    'anarana' => $nom,
                    "objet" => $obj
                ]
        );
    }
}