<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couleurs
 *
 * @ORM\Table(name="couleurs")
 * @ORM\Entity
 */
class Couleurs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_couleur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCouleur;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=25, nullable=true)
     */
    private $couleur = 'NULL';



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
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Couleurs
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
}
