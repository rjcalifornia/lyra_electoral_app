<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DepartamentoRepository")
 */
class Departamento
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
     * @ORM\Column(name="nombredepartamento", type="string", length=255, nullable=true)
     */
    private $nombredepartamento;

    /**
     * @var int
     *
     * @ORM\Column(name="correlativo", type="integer", nullable=true)
     */
    private $correlativo;

    /**
     * @var int
     *
     * @ORM\Column(name="diputados", type="integer", nullable=true)
     */
    private $diputados;


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
     * Set nombredepartamento
     *
     * @param string $nombredepartamento
     *
     * @return Departamento
     */
    public function setNombredepartamento($nombredepartamento)
    {
        $this->nombredepartamento = $nombredepartamento;

        return $this;
    }

    /**
     * Get nombredepartamento
     *
     * @return string
     */
    public function getNombredepartamento()
    {
        return $this->nombredepartamento;
    }

    /**
     * Set correlativo
     *
     * @param integer $correlativo
     *
     * @return Departamento
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
     * Set diputados
     *
     * @param integer $diputados
     *
     * @return Departamento
     */
    public function setDiputados($diputados)
    {
        $this->diputados = $diputados;

        return $this;
    }

    /**
     * Get diputados
     *
     * @return int
     */
    public function getDiputados()
    {
        return $this->diputados;
    }
}

