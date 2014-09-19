<?php

namespace Afpa\ArtisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity(repositoryClass="Afpa\ArtisteBundle\Entity\ArtisteRepository")
 */
class Artiste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var array
     *
     * @ORM\Column(name="genres", type="array", nullable=true)
     */
    private $genres;

    /**
     * @var integer
     *
     * @ORM\Column(name="popularite", type="integer", nullable=true)
     */
    private $popularite;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;
	
	/**
     * @var string
     *
     * @ORM\Column(name="external_id", type="string", length=255)
     */
    private $external_id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Artiste
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Artiste
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set genres
     *
     * @param array $genres
     * @return Artiste
     */
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get genres
     *
     * @return array 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set popularite
     *
     * @param integer $popularite
     * @return Artiste
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }

    /**
     * Get popularite
     *
     * @return integer 
     */
    public function getPopularite()
    {
        return $this->popularite;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Artiste
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }
	
	/**
     * Set external_id
     *
     * @param string $external_id
     * @return Artiste
     */
    public function setExternal_id($external_id)
    {
        $this->external_id = $external_id;

        return $this;
    }
	
	/**
     * Get external_id
     *
     * @return string 
     */
    public function getExternal_id()
    {
        return $this->external_id;
    }
	
	public function getCategory()
	{
		$popularite = $this->popularite;
		if ($popularite >= 0 && $popularite <= 20 ) $category = "Artiste peu connu";
		if ($popularite >= 21 && $popularite <= 40 ) $category = "Chanteur";
		if ($popularite >= 41 && $popularite <= 60 ) $category = "Star";
		if ($popularite >= 61 && $popularite <= 80 ) $category = "Super-Star";
		else $category = "Icône";
		return $category;
	}

	
	
}
