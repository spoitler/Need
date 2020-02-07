<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compose
 *
 * @ORM\Table(name="compose")
 * @ORM\Entity
 */
class Compose
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_compose", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompose;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     */
    private $idCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;



    /**
     * Get idCompose
     *
     * @return integer
     */
    public function getIdCompose()
    {
        return $this->idCompose;
    }

    /**
     * Set idCommande
     *
     * @param integer $idCommande
     *
     * @return Compose
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return integer
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Compose
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Compose
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
