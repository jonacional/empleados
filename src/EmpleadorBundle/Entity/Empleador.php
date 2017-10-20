<?php

namespace EmpleadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM; 
use Doctrine\Common\Collection\ArrayCollection;

/**
 * Empleador
 *
 * @ORM\Table(name="empleador")
 * @ORM\Entity(repositoryClass="EmpleadorBundle\Repository\EmpleadorRepository")
 */
class Empleador
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
     * @ORM\Column(name="nombre", type="string", length=190)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=20)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="integer")
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direcion", type="string", length=200)
     */
    private $direcion;

    /**
     * @var \date
     *
     * @ORM\Column(name="fechaNac", type="date")
     */
    private $fechaNac;


 
    


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
     * @return Empleador
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
     * @return Empleador
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
     * @param string $cedula
     *
     * @return Empleador
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleador
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direcion
     *
     * @param string $direcion
     *
     * @return Empleador
     */
    public function setDirecion($direcion)
    {
        $this->direcion = $direcion;

        return $this;
    }

    /**
     * Get direcion
     *
     * @return string
     */
    public function getDirecion()
    {
        return $this->direcion;
    }

    /**
     * Set fechaNac
     *
     * @param \date $fechaNac
     *
     * @return Empleador
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \date
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

   

    /**
     * Add empleado
     *
     * @param \EmpleadorBundle\Entity\Empleado $empleado
     *
     * @return Empleador
     */
    public function addEmpleado(\EmpleadorBundle\Entity\Empleado $empleado)
    {
        $this->empleados[] = $empleado;

        return $this;
    }

    /**
     * Remove empleado
     *
     * @param \EmpleadorBundle\Entity\Empleado $empleado
     */
    public function removeEmpleado(\EmpleadorBundle\Entity\Empleado $empleado)
    {
        $this->empleados->removeElement($empleado);
    }

    /**
     * Get empleados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }


    public function __toString()
   {
      return strval( $this->getId() );
   }
}
