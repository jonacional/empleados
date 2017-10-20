<?php

namespace EmpleadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado")
 * @ORM\Entity(repositoryClass="EmpleadorBundle\Repository\EmpleadoRepository")
 */
class Empleado
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
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=50)
     */
    private $sexo;

    /**
     * @var int
     *
     * @ORM\Column(name="cedula", type="integer")
     */
    private $cedula;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=255)
     */
    private $contrato;

    /**
     * @var int
     *
     * @ORM\Column(name="empleador", type="integer")
     */
    private $empleador;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Empleado
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

     /**
     * Set cedula
     *
     * @param integer $cedula
     *
     * @return Empleado
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return int
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     *
     * @return Empleado
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set empleador
     *
     * @param integer $empleador
     *
     * @return Empleado
     */
    public function setEmpleador($empleador)
    {
        $this->empleador = $empleador;

        return $this;
    }

    /**
     * Get empleador
     *
     * @return int
     */
    public function getEmpleador()
    {
        return $this->empleador;
    }

    /**
     * Set empleadores
     *
     * @param \EmpleadorBundle\Entity\Empleador $empleadores
     *
     * @return Empleado
     */
    public function setEmpleadores(\EmpleadorBundle\Entity\Empleador $empleadores)
    {
        $this->empleadores = $empleadores;

        return $this;
    }

    /**
     * Get empleadores
     *
     * @return \EmpleadorBundle\Entity\Empleador
     */
    public function getEmpleadores()
    {
        return $this->empleadores;
    }
}
