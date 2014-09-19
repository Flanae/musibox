<?php

namespace Afpa\ArtisteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AfpaArtisteBundle:Default:index.html.twig', array('name' => $name));
    }
}
