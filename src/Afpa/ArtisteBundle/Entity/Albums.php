<?php

namespace Afpa\ArtisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albums
 *
 * @ORM\Table(name="album")
 * @ORM\Entity(repositoryClass="Afpa\ArtisteBundle\Entity\AlbumsRepository")
 */
class Albums
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
     * @ORM\Column(name="alb_nom", type="string", length=255)
     */
    private $albNom;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_image", type="string", length=255)
     */
    private $albImage;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_link", type="string", length=255, nullable=true)
     */
    private $albLink;

    /**
     * @var string
     *
     * @ORM\Column(name="alb_external_id", type="string", length=255)
     */
    private $albExternalId;
	
	/**
     * @var string
     *
     * @ORM\Column(name="alb_type", type="string", length=255, nullable=true)
     */
    private $albtype;


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
     * Set albNom
     *
     * @param string $albNom
     * @return Albums
     */
    public function setAlbNom($albNom)
    {
        $this->albNom = $albNom;

        return $this;
    }

    /**
     * Get albNom
     *
     * @return string 
     */
    public function getAlbNom()
    {
        return $this->albNom;
    }

    /**
     * Set albImage
     *
     * @param string $albImage
     * @return Albums
     */
    public function setAlbImage($albImage)
    {
        $this->albImage = $albImage;

        return $this;
    }

    /**
     * Get albImage
     *
     * @return string 
     */
    public function getAlbImage()
    {
        return $this->albImage;
    }

    /**
     * Set albLink
     *
     * @param string $albLink
     * @return Albums
     */
    public function setAlbLink($albLink)
    {
        $this->albLink = $albLink;

        return $this;
    }

    /**
     * Get albLink
     *
     * @return string 
     */
    public function getAlbLink()
    {
        return $this->albLink;
    }

    /**
     * Set albExternalId
     *
     * @param string $albExternalId
     * @return Albums
     */
    public function setAlbExternalId($albExternalId)
    {
        $this->albExternalId = $albExternalId;

        return $this;
    }

    /**
     * Get albExternalId
     *
     * @return string 
     */
    public function getAlbExternalId()
    {
        return $this->albExternalId;
    }
	
	/**
     * Set albType
     *
     * @param string $albType
     * @return Albums
     */
    public function setAlbType($albType)
    {
        $this->albType = $albType;

        return $this;
    }

    /**
     * Get albType
     *
     * @return string 
     */
    public function getAlbType()
    {
        return $this->albType;
    }
}
