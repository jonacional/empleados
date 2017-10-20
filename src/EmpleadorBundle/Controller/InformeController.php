<?php

namespace EmpleadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 
use EmpleadorBundle\Entity\Empleador;
use EmpleadorBundle\Form\EmpleadorType;

class InformeController extends Controller
{
    public function indexAction()
    {
     
     $em = $this->getDoctrine()->getEntityManager();
     $sql="SELECT `empleador`.`nombre` as nom, `empleador`.`cedula` as ced, `empleador`.`direcion` as dir, `empleado`.`nombre` as nom2, `empleado`.`cedula` as ced2, `empleado`.`contrato` FROM  `empleador`, `empleado` WHERE `empleador`.`id`= `empleado`.`empleador`";
     
     $statement = $em->getConnection()->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll(); 
     return $this ->render('EmpleadorBundle:Informe:index.html.twig', array('nomina'=> $result));

    }

     
 
}
