<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="App\Repository\LangueRepository")
 */
class Langue
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * Plusieurs livre peut avoir plusieur langue.
     * @ORM\ManyToMany(targetEntity="Livre", mappedBy="langues")
     */
    private $livres;

    public function __construct() {
        $this->livres = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Langue
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Langue
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
}
