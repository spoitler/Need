<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", indexes={@ORM\Index(name="fk_produits_tailles", columns={"id_taille"}), @ORM\Index(name="fk_produits_couleurs", columns={"id_couleur"}), @ORM\Index(name="id_reference", columns={"id_reference"}), @ORM\Index(name="id_categories", columns={"id_categories"}), @ORM\Index(name="id_type", columns={"id_type"})})
 * @ORM\Entity (repositoryClass="AppBundle\Entity\ProduitRepository")
 */
class Produits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_taille", type="integer", nullable=false)
     */
    private $idTaille;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_couleur", type="integer", nullable=false)
     */
    private $idCouleur;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var string
     *
     * @ORM\Column(name="id_reference", type="string", length=100, nullable=false)
     */
    private $idReference;

    /**
     * @var string
     *
     * @ORM\Column(name="id_categories", type="string", length=50, nullable=false)
     */
    private $idCategories;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_genre", type="integer", nullable=false)
     */
    private $idGenre;



    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produits
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set idTaille
     *
     * @param integer $idTaille
     *
     * @return Produits
     */
    public function setIdTaille($idTaille)
    {
        $this->idTaille = $idTaille;

        return $this;
    }

    /**
     * Get idTaille
     *
     * @return integer
     */
    public function getIdTaille()
    {
        return $this->idTaille;
    }

    /**
     * Set idCouleur
     *
     * @param integer $idCouleur
     *
     * @return Produits
     */
    public function setIdCouleur($idCouleur)
    {
        $this->idCouleur = $idCouleur;

        return $this;
    }

    /**
     * Get idCouleur
     *
     * @return integer
     */
    public function getIdCouleur()
    {
        return $this->idCouleur;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Produits
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set idReference
     *
     * @param string $idReference
     *
     * @return Produits
     */
    public function setIdReference($idReference)
    {
        $this->idReference = $idReference;

        return $this;
    }

    /**
     * Get idReference
     *
     * @return string
     */
    public function getIdReference()
    {
        return $this->idReference;
    }

    /**
     * Set idCategories
     *
     * @param string $idCategories
     *
     * @return Produits
     */
    public function setIdCategories($idCategories)
    {
        $this->idCategories = $idCategories;

        return $this;
    }

    /**
     * Get idCategories
     *
     * @return string
     */
    public function getIdCategories()
    {
        return $this->idCategories;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return Produits
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return integer
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set idGenre
     *
     * @param integer $idGenre
     *
     * @return Produits
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return integer
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }
}
