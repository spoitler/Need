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


}

