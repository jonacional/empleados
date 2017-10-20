<?php

namespace EmpleadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\HttpFoundation\Request; 
use EmpleadorBundle\Entity\Empleador;
use EmpleadorBundle\Form\EmpleadorType;

class UserController extends Controller
{
    public function indexAction()
    {
     $em = $this->getDoctrine()->getManager();
     $users = $em->getRepository('EmpleadorBundle:Empleador')->findAll();   
      
      return $this ->render('EmpleadorBundle:Empleador:index.html.twig', array('users'=> $users));
    }

    public function addAction(Request $request){
      $user = new Empleador();
      $form= $this->createForm(EmpleadorType::class, $user);

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
          return $this->redirectToRoute('empleador_index');
      }
      return $this->render('EmpleadorBundle:Empleador:add.html.twig', array('form'=>$form->createView()));
    }
 
}
