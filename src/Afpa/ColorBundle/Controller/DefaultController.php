<?php

namespace Afpa\ColorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
		$rouge = rand(0,255);
		$vert = rand(0,255);
		$bleu = rand(0,255);
        return $this->render('AfpaColorBundle:Default:index.html.twig', array('name' => $name, 'rouge' => $rouge, 'vert' => $vert,'bleu' => $bleu));
    }
}
