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



    /**
     * Get idCivilite
     *
     * @return integer
     */
    public function getIdCivilite()
    {
        return $this->idCivilite;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Civilites
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }
}
