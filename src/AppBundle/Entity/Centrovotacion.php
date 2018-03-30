<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centrovotacion
 *
 * @ORM\Table(name="centrovotacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CentrovotacionRepository")
 */
class Centrovotacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecentro", type="string", length=255, unique=true)
     */
    private $nombrecentro;

    /**
     * @var int
     *
     * @ORM\Column(name="correlativo", type="integer")
     */
    private $correlativo;

    /**
     * @var int
     *
     * @ORM\Column(name="totaljrv", type="integer")
     */
    private $totaljrv;

    /**
     * @var int
     *
     * @ORM\Column(name="municipioid", type="integer", nullable=true)
     */
    private $municipioid;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrecentro
     *
     * @param string $nombrecentro
     *
     * @return Centrovotacion
     */
    public function setNombrecentro($nombrecentro)
    {
        $this->nombrecentro = $nombrecentro;

        return $this;
    }

    /**
     * Get nombrecentro
     *
     * @return string
     */
    public function getNombrecentro()
    {
        return $this->nombrecentro;
    }

    /**
     * Set correlativo
     *
     * @param integer $correlativo
     *
     * @return Centrovotacion
     */
    public function setCorrelativo($correlativo)
    {
        $this->correlativo = $correlativo;

        return $this;
    }

    /**
     * Get correlativo
     *
     * @return int
     */
    public function getCorrelativo()
    {
        return $this->correlativo;
    }

    /**
     * Set totaljrv
     *
     * @param integer $totaljrv
     *
     * @return Centrovotacion
     */
    public function setTotaljrv($totaljrv)
    {
        $this->totaljrv = $totaljrv;

        return $this;
    }

    /**
     * Get totaljrv
     *
     * @return int
     */
    public function getTotaljrv()
    {
        return $this->totaljrv;
    }

    /**
     * Set municipioid
     *
     * @param integer $municipioid
     *
     * @return Centrovotacion
     */
    public function setMunicipioid($municipioid)
    {
        $this->municipioid = $municipioid;

        return $this;
    }

    /**
     * Get municipioid
     *
     * @return int
     */
    public function getMunicipioid()
    {
        return $this->municipioid;
    }
}

