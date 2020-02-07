<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tailles
 *
 * @ORM\Table(name="tailles", indexes={@ORM\Index(name="fk_taille_type", columns={"id_type"})})
 * @ORM\Entity
 */
class Tailles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_taille", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTaille;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="string", length=25, nullable=true)
     */
    private $taille = 'NULL';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=true)
     */
    private $idType = 'NULL';


}

