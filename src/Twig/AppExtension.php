<?php
namespace App\Twig;

use App\Entity\Utilisateur;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Class AppExtension
 * @package App\Twig
 */
class AppExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new TwigFilter('ajout_unite', [$this, 'ajoutUnite']),
            //new TwigFilter('ajout_unite', [$this, 'ajoutUnite']),
        ];
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('area', [$this, 'calculateArea']),
            //new TwigFunction('area', [$this, 'calculateArea']),
        ];
    }

    /**
     * @param $number
     * @return string
     */
    public function ajoutUnite($number)
    {
        return $number. 'Ar';
    }

    /**
     * @param Utilisateur $user
     * @param int $length
     * @return int
     */
    public function calculateArea($user, int $length)
    {
        return $user->getNom();
    }
}