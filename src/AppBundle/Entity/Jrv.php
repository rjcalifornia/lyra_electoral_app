<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jrv
 *
 * @ORM\Table(name="jrv")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JrvRepository")
 */
class Jrv
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
     * @ORM\Column(name="jrvnum", type="integer", nullable=true)
     */
    private $jrvnum;

    /**
     * @var int
     *
     * @ORM\Column(name="centrovotacionid", type="integer", nullable=true)
     */
    private $centrovotacionid;

    public function __toString() {
    return $this->id;
}


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
     * Set jrvnum
     *
     * @param integer $jrvnum
     *
     * @return Jrv
     */
    public function setJrvnum($jrvnum)
    {
        $this->jrvnum = $jrvnum;

        return $this;
    }

    /**
     * Get jrvnum
     *
     * @return int
     */
    public function getJrvnum()
    {
        return $this->jrvnum;
    }

    /**
     * Set centrovotacionid
     *
     * @param integer $centrovotacionid
     *
     * @return Jrv
     */
    public function setCentrovotacionid($centrovotacionid)
    {
        $this->centrovotacionid = $centrovotacionid;

        return $this;
    }

    /**
     * Get centrovotacionid
     *
     * @return int
     */
    public function getCentrovotacionid()
    {
        return $this->centrovotacionid;
    }
}

