<?php

namespace EmpleadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmpleadorBundle:Default:index.html.twig');
    }
}
