<?php

namespace AppBundle\Entity;

/**
 * Churn
 */
class Churn
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var string
     */
    private $videoId;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     */
    private $fechaActualizacion;

    /**
     * @var \AppBundle\Entity\User
     */
    private $creadoPor;

    /**
     * @var \AppBundle\Entity\User
     */
    private $actualizadoPor;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Churn
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set texto
     *
     * @param string $texto
     *
     * @return Churn
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set videoId
     *
     * @param string $videoId
     *
     * @return Churn
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;

        return $this;
    }

    /**
     * Get videoId
     *
     * @return string
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Churn
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Churn
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaActualizacion
     *
     * @param \DateTime $fechaActualizacion
     *
     * @return Churn
     */
    public function setFechaActualizacion($fechaActualizacion)
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    /**
     * Get fechaActualizacion
     *
     * @return \DateTime
     */
    public function getFechaActualizacion()
    {
        return $this->fechaActualizacion;
    }

    /**
     * Set creadoPor
     *
     * @param \AppBundle\Entity\User $creadoPor
     *
     * @return Churn
     */
    public function setCreadoPor(\AppBundle\Entity\User $creadoPor = null)
    {
        $this->creadoPor = $creadoPor;

        return $this;
    }

    /**
     * Get creadoPor
     *
     * @return \AppBundle\Entity\User
     */
    public function getCreadoPor()
    {
        return $this->creadoPor;
    }

    /**
     * Set actualizadoPor
     *
     * @param \AppBundle\Entity\User $actualizadoPor
     *
     * @return Churn
     */
    public function setActualizadoPor(\AppBundle\Entity\User $actualizadoPor = null)
    {
        $this->actualizadoPor = $actualizadoPor;

        return $this;
    }

    /**
     * Get actualizadoPor
     *
     * @return \AppBundle\Entity\User
     */
    public function getActualizadoPor()
    {
        return $this->actualizadoPor;
    }
}

