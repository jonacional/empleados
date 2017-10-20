<?php

namespace EmpleadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 
use EmpleadorBundle\Entity\Empleado;
use EmpleadorBundle\Form\EmpleadoType;

class EmpleadoController extends Controller
{
    public function listAction()
    {
     $em = $this->getDoctrine()->getManager();
     $users = $em->getRepository('EmpleadorBundle:Empleado')->findAll();   
      
      return $this ->render('EmpleadorBundle:Empleado:index.html.twig', array('users'=> $users));
    }

    public function nuevoAction(Request $request){
      $user = new Empleado();
      $form= $this->createForm(EmpleadoType::class, $user);

      $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $user = $form->getData();

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
          return $this->redirectToRoute('empleado_list');
      }
      return $this->render('EmpleadorBundle:Empleado:add.html.twig', array('form'=>$form->createView()));
    }
 
}
