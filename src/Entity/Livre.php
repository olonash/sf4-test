<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="livre")
 * @ORM\Entity(repositoryClass="App\Repository\LivreRepository")
 */
class Livre
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
    private $titre;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_edition;

    /**
     * @ORM\ManyToOne(targetEntity="Auteur", inversedBy="livres")
     * @ORM\JoinColumn(name="id_auteur", nullable=true)
     */
    private $auteur;

    /**
     * plusieurs livres peut avoir plusieurs langue.
     * @ORM\ManyToMany(targetEntity="Langue", inversedBy="livres")
     * @ORM\JoinTable(name="livre_langue")
     */
    private $langues;

    /**
     * Livre constructor.
     */
    public function __construct() {
        $this->langues = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateEdition()
    {
        return $this->date_edition;
    }

    /**
     * @param mixed $date_edition
     * @return Livre
     */
    public function setDateEdition($date_edition)
    {
        $this->date_edition = $date_edition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     * @return Livre
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLangues()
    {
        return $this->langues;
    }

    /**
     * @param mixed $langues
     */
    public function setLangues($langues)
    {
        $this->langues = $langues;
    }
}
