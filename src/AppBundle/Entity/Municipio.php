<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MunicipioRepository")
 */
class Municipio
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
     * @ORM\Column(name="nombremunicipio", type="string", length=255, nullable=true)
     */
    private $nombremunicipio;

    /**
     * @var int
     *
     * @ORM\Column(name="correlativo", type="integer", nullable=true)
     */
    private $correlativo;

    /**
     * @var int
     *
     * @ORM\Column(name="totalconcejales", type="integer", nullable=true)
     */
    private $totalconcejales;

    /**
     * @var int
     *
     * @ORM\Column(name="concejalespropietarios", type="integer", nullable=true)
     */
    private $concejalespropietarios;

    /**
     * @var int
     *
     * @ORM\Column(name="suplentes", type="integer", nullable=true)
     */
    private $suplentes;

    /**
     * @var int
     *
     * @ORM\Column(name="departamentoid", type="integer", nullable=true)
     */
    private $departamentoid;


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
     * Set nombremunicipio
     *
     * @param string $nombremunicipio
     *
     * @return Municipio
     */
    public function setNombremunicipio($nombremunicipio)
    {
        $this->nombremunicipio = $nombremunicipio;

        return $this;
    }

    /**
     * Get nombremunicipio
     *
     * @return string
     */
    public function getNombremunicipio()
    {
        return $this->nombremunicipio;
    }

    /**
     * Set correlativo
     *
     * @param integer $correlativo
     *
     * @return Municipio
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
     * Set totalconcejales
     *
     * @param integer $totalconcejales
     *
     * @return Municipio
     */
    public function setTotalconcejales($totalconcejales)
    {
        $this->totalconcejales = $totalconcejales;

        return $this;
    }

    /**
     * Get totalconcejales
     *
     * @return int
     */
    public function getTotalconcejales()
    {
        return $this->totalconcejales;
    }

    /**
     * Set concejalespropietarios
     *
     * @param integer $concejalespropietarios
     *
     * @return Municipio
     */
    public function setConcejalespropietarios($concejalespropietarios)
    {
        $this->concejalespropietarios = $concejalespropietarios;

        return $this;
    }

    /**
     * Get concejalespropietarios
     *
     * @return int
     */
    public function getConcejalespropietarios()
    {
        return $this->concejalespropietarios;
    }

    /**
     * Set suplentes
     *
     * @param integer $suplentes
     *
     * @return Municipio
     */
    public function setSuplentes($suplentes)
    {
        $this->suplentes = $suplentes;

        return $this;
    }

    /**
     * Get suplentes
     *
     * @return int
     */
    public function getSuplentes()
    {
        return $this->suplentes;
    }

    /**
     * Set departamentoid
     *
     * @param integer $departamentoid
     *
     * @return Municipio
     */
    public function setDepartamentoid($departamentoid)
    {
        $this->departamentoid = $departamentoid;

        return $this;
    }

    /**
     * Get departamentoid
     *
     * @return int
     */
    public function getDepartamentoid()
    {
        return $this->departamentoid;
    }
}

