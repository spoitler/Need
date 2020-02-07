<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilites
 *
 * @ORM\Table(name="civilites")
 * @ORM\Entity
 */
class Civilites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_civilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=25, nullable=true)
     */
    private $civilite = 'NULL';


}

