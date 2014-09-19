<?php

namespace Afpa\CalculetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class operationsController extends Controller
{
    public function calculAction($operation, $nb1, $nb2)
    {
		$op_result = '';
		$resultat = '';
			switch($operation) {
			case "addition":
				$op_result = $nb1 + $nb2;
				$resultat = $nb1.' + '.$nb2.' = '.$op_result;
				break;
			case "soustraction":
				$op_result = $nb1 - $nb2;
				$resultat = $nb1.' - '.$nb2.' = '.$op_result;
				break;
			case "multiplication":
				$op_result = $nb1 * $nb2;
				$resultat = $nb1.' x '.$nb2.' = '.$op_result;
				break;
			case "division":
				if ($nb1 != 0 && $nb2 != 0)
				{
					$op_result = $nb1 / $nb2;
					$resultat = $nb1.' / '.$nb2.' = '.$op_result;
				}
				else
				{
					$response = new Response;
					$response->setContent("Page d'erreur 404");
					$response->setStatusCode(404);
					return $response;
				}
				break;
			case "default":
				$resultat = 'Une erreur c\'est produite';
				break;
			}
        return $this->render('CalculetteBundle:Default:operations.html.twig', array('resultat' => $resultat));
    }
	public function factorielAction($nb3)
    {
		$fact_result = '';
		$resultat = '';
		function fact($n) {
			if($n === 0)
			{ 
				return 1; 
			}
			else
			{
				return $n*fact($n-1);
			}
		}
		$fact_result = fact($nb3); 
		$resultat = $nb3.'! = '.$fact_result;
        return $this->render('CalculetteBundle:Default:factoriel.html.twig', array('resultat' => $resultat));
    }
}