<?php

namespace Afpa\CalculetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CalculetteBundle:Default:index.html.twig', array('name' => $name));
    }
}
