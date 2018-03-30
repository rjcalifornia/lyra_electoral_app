<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alcalde
 *
 * @ORM\Table(name="diputado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlcaldeRepository")
 */
class Diputado
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
     * @var int
     *
     * @ORM\Column(name="fmln", type="integer", nullable=true)
     */
    private $fmln;

    /**
     * @var int
     *
     * @ORM\Column(name="cd", type="integer", nullable=true)
     */
    private $cd;

    /**
     * @var int
     *
     * @ORM\Column(name="pdc", type="integer", nullable=true)
     */
    private $pdc;

    /**
     * @var int
     *
     * @ORM\Column(name="pcn", type="integer", nullable=true)
     */
    private $pcn;

    /**
     * @var int
     *
     * @ORM\Column(name="psp", type="integer", nullable=true)
     */
    private $psp;

    /**
     * @var int
     *
     * @ORM\Column(name="fps", type="integer", nullable=true)
     */
    private $fps;

    /**
     * @var int
     *
     * @ORM\Column(name="gana", type="integer", nullable=true)
     */
    private $gana;

    /**
     * @var int
     *
     * @ORM\Column(name="ds", type="integer", nullable=true)
     */
    private $ds;

    /**
     * @var int
     *
     * @ORM\Column(name="psd", type="integer", nullable=true)
     */
    private $psd;

    /**
     * @var int
     *
     * @ORM\Column(name="arena", type="integer", nullable=true)
     */
    private $arena;

    /**
     * @var int
     *
     * @ORM\Column(name="sobrantes", type="integer", nullable=true)
     */
    private $sobrantes;

    /**
     * @var int
     *
     * @ORM\Column(name="inutilizadas", type="integer", nullable=true)
     */
    private $inutilizadas;
    
        /**
     * @var int
     *
     * @ORM\Column(name="escrutados", type="integer", nullable=true)
     */
    private $escrutados;

    /**
     * @var int
     *
     * @ORM\Column(name="faltantes", type="integer", nullable=true)
     */
    private $faltantes;

    /**
     * @var int
     *
     * @ORM\Column(name="nulo", type="integer", nullable=true)
     */
    private $nulo;

    /**
     * @var int
     *
     * @ORM\Column(name="impugnados", type="integer", nullable=true)
     */
    private $impugnados;

    /**
     * @var int
     *
     * @ORM\Column(name="abstenciones", type="integer", nullable=true)
     */
    private $abstenciones;

    /**
     * @var int
     *
     * @ORM\Column(name="entregados", type="integer", nullable=true)
     */
    private $entregados;

    /**
     * @var int
     *
     * @ORM\Column(name="jrvnum", type="integer", nullable=true)
     */
    private $jrvnum;

    /**
     * @var int
     *
     * @ORM\Column(name="municipioid", type="integer", nullable=true)
     */
    private $municipioid;
    
     /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Centrovotacion")
     * @ORM\JoinColumn(name="centrovotacion", referencedColumnName="id")
     */
    private $centrovotacion;
    
    /**
     * @var int
     *
     * @ORM\Column(name="cruzados", type="integer", nullable=true)
     */
    private $cruzados;

    /**
     * @var string
     *
     * @ORM\Column(name="useradic", type="string", length=255, nullable=true)
     */
    private $useradic;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaadic", type="string", length=255, nullable=true)
     */
    private $fechaadic;


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
     * Set fmln
     *
     * @param integer $fmln
     *
     * @return Alcalde
     */
    public function setFmln($fmln)
    {
        $this->fmln = $fmln;

        return $this;
    }

    /**
     * Get fmln
     *
     * @return int
     */
    public function getFmln()
    {
        return $this->fmln;
    }

    /**
     * Set cd
     *
     * @param integer $cd
     *
     * @return Alcalde
     */
    public function setCd($cd)
    {
        $this->cd = $cd;

        return $this;
    }

    /**
     * Get cd
     *
     * @return int
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Set pdc
     *
     * @param integer $pdc
     *
     * @return Alcalde
     */
    public function setPdc($pdc)
    {
        $this->pdc = $pdc;

        return $this;
    }

    /**
     * Get pdc
     *
     * @return int
     */
    public function getPdc()
    {
        return $this->pdc;
    }

    /**
     * Set pcn
     *
     * @param integer $pcn
     *
     * @return Alcalde
     */
    public function setPcn($pcn)
    {
        $this->pcn = $pcn;

        return $this;
    }

    /**
     * Get pcn
     *
     * @return int
     */
    public function getPcn()
    {
        return $this->pcn;
    }

    /**
     * Set psp
     *
     * @param integer $psp
     *
     * @return Alcalde
     */
    public function setPsp($psp)
    {
        $this->psp = $psp;

        return $this;
    }

    /**
     * Get psp
     *
     * @return int
     */
    public function getPsp()
    {
        return $this->psp;
    }

    /**
     * Set fps
     *
     * @param integer $fps
     *
     * @return Alcalde
     */
    public function setFps($fps)
    {
        $this->fps = $fps;

        return $this;
    }

    /**
     * Get fps
     *
     * @return int
     */
    public function getFps()
    {
        return $this->fps;
    }

    /**
     * Set gana
     *
     * @param integer $gana
     *
     * @return Alcalde
     */
    public function setGana($gana)
    {
        $this->gana = $gana;

        return $this;
    }

    /**
     * Get gana
     *
     * @return int
     */
    public function getGana()
    {
        return $this->gana;
    }

    /**
     * Set ds
     *
     * @param integer $ds
     *
     * @return Alcalde
     */
    public function setDs($ds)
    {
        $this->ds = $ds;

        return $this;
    }

    /**
     * Get ds
     *
     * @return int
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Set psd
     *
     * @param integer $psd
     *
     * @return Alcalde
     */
    public function setPsd($psd)
    {
        $this->psd = $psd;

        return $this;
    }

    /**
     * Get psd
     *
     * @return int
     */
    public function getPsd()
    {
        return $this->psd;
    }

    /**
     * Set arena
     *
     * @param integer $arena
     *
     * @return Alcalde
     */
    public function setArena($arena)
    {
        $this->arena = $arena;

        return $this;
    }

    /**
     * Get arena
     *
     * @return int
     */
    public function getArena()
    {
        return $this->arena;
    }

    /**
     * Set sobrantes
     *
     * @param integer $sobrantes
     *
     * @return Alcalde
     */
    public function setSobrantes($sobrantes)
    {
        $this->sobrantes = $sobrantes;

        return $this;
    }

    /**
     * Get sobrantes
     *
     * @return int
     */
    public function getSobrantes()
    {
        return $this->sobrantes;
    }

    /**
     * Set inutilizadas
     *
     * @param integer $inutilizadas
     *
     * @return Alcalde
     */
    public function setInutilizadas($inutilizadas)
    {
        $this->inutilizadas = $inutilizadas;

        return $this;
    }

    /**
     * Get inutilizadas
     *
     * @return int
     */
    public function getInutilizadas()
    {
        return $this->inutilizadas;
    }

    /**
     * Set faltantes
     *
     * @param integer $faltantes
     *
     * @return Alcalde
     */
    public function setFaltantes($faltantes)
    {
        $this->faltantes = $faltantes;

        return $this;
    }

    /**
     * Get faltantes
     *
     * @return int
     */
    public function getFaltantes()
    {
        return $this->faltantes;
    }

    /**
     * Set nulo
     *
     * @param integer $nulo
     *
     * @return Alcalde
     */
    public function setNulo($nulo)
    {
        $this->nulo = $nulo;

        return $this;
    }

    /**
     * Get nulo
     *
     * @return int
     */
    public function getNulo()
    {
        return $this->nulo;
    }

    /**
     * Set impugnados
     *
     * @param integer $impugnados
     *
     * @return Alcalde
     */
    public function setImpugnados($impugnados)
    {
        $this->impugnados = $impugnados;

        return $this;
    }

    /**
     * Get impugnados
     *
     * @return int
     */
    public function getImpugnados()
    {
        return $this->impugnados;
    }

    /**
     * Set abstenciones
     *
     * @param integer $abstenciones
     *
     * @return Alcalde
     */
    public function setAbstenciones($abstenciones)
    {
        $this->abstenciones = $abstenciones;

        return $this;
    }

    /**
     * Get abstenciones
     *
     * @return int
     */
    public function getAbstenciones()
    {
        return $this->abstenciones;
    }

    /**
     * Set entregados
     *
     * @param integer $entregados
     *
     * @return Alcalde
     */
    public function setEntregados($entregados)
    {
        $this->entregados = $entregados;

        return $this;
    }

    /**
     * Get entregados
     *
     * @return int
     */
    public function getEntregados()
    {
        return $this->entregados;
    }



    /**
     * Set municipioid
     *
     * @param integer $municipioid
     *
     * @return Alcalde
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

    /**
     * Set useradic
     *
     * @param string $useradic
     *
     * @return Alcalde
     */
    public function setUseradic($useradic)
    {
        $this->useradic = $useradic;

        return $this;
    }

    /**
     * Get useradic
     *
     * @return string
     */
    public function getUseradic()
    {
        return $this->useradic;
    }

    /**
     * Set fechaadic
     *
     * @param string $fechaadic
     *
     * @return Alcalde
     */
    public function setFechaadic($fechaadic)
    {
        $this->fechaadic = $fechaadic;

        return $this;
    }

    /**
     * Get fechaadic
     *
     * @return string
     */
    public function getFechaadic()
    {
        return $this->fechaadic;
    }

    /**
     * Set jrvnum
     *
     * @param integer $jrvnum
     *
     * @return Alcalde
     */
    public function setJrvnum($jrvnum)
    {
        $this->jrvnum = $jrvnum;

        return $this;
    }

    /**
     * Get jrvnum
     *
     * @return integer
     */
    public function getJrvnum()
    {
        return $this->jrvnum;
    }

    /**
     * Set cruzados
     *
     * @param integer $cruzados
     *
     * @return Diputado
     */
    public function setCruzados($cruzados)
    {
        $this->cruzados = $cruzados;

        return $this;
    }

    /**
     * Get cruzados
     *
     * @return integer
     */
    public function getCruzados()
    {
        return $this->cruzados;
    }

    /**
     * Set centrovotacion
     *
     * @param integer $centrovotacion
     *
     * @return Diputado
     */
    public function setCentrovotacion($centrovotacion)
    {
        $this->centrovotacion = $centrovotacion;

        return $this;
    }

    /**
     * Get centrovotacion
     *
     * @return integer
     */
    public function getCentrovotacion()
    {
        return $this->centrovotacion;
    }
    
    /**
     * Set escrutados
     *
     * @param integer $escrutados
     *
     * @return Alcalde
     */
    public function setEscrutados($escrutados)
    {
        $this->escrutados = $escrutados;

        return $this;
    }

    /**
     * Get escrutados
     *
     * @return int
     */
    public function getEscrutados()
    {
        return $this->escrutados;
    }
}
