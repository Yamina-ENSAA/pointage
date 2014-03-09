<?php

namespace Pointage\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('userBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('userBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('userBundle:Default:index.html.twig', array('name' => $name));
    }
    public function pointerAction()
    {
        return $this->render('userBundle:Default:pointer.html.twig');
    }

}
