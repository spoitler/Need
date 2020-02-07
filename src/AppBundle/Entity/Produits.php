<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", indexes={@ORM\Index(name="fk_produits_tailles", columns={"id_taille"}), @ORM\Index(name="fk_produits_couleurs", columns={"id_couleur"}), @ORM\Index(name="fk_produits_reference", columns={"id_reference"}), @ORM\Index(name="fk_produits_categories", columns={"id_categories"}), @ORM\Index(name="fk_produits_types", columns={"id_type"})})
 * @ORM\Entity
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


}

