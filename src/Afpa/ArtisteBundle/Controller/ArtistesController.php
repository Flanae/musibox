<?php

namespace Afpa\ArtisteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Afpa\ArtisteBundle\Entity\Artiste;
use Afpa\ArtisteBundle\Entity\Albums;

class ArtistesController extends Controller
{
    public function viewAction($artiste)
    {
		$artistes = str_replace(' ', '_', $artiste);
		$url = "https://api.spotify.com/v1/search?type=artist&q=".$artistes;
		$json = file_get_contents($url);
		$tabartiste = json_decode($json, True);
		
		$url_alb = "https://api.spotify.com/v1/search?type=album&q=".$artiste;
		$json_alb = file_get_contents($url_alb);
		$tabalbum = json_decode($json_alb, True);
		
		//print_r($tabalbum);
		
		return $this->render('AfpaArtisteBundle:Default:artistes.html.twig', array('artiste' => $tabartiste, 'album' => $tabalbum));
    }
	
	public function saveAction($artist)
    {
		$doctrine = $this->getDoctrine();
		$em = $doctrine->getManager();
		
		$url_art = "https://api.spotify.com/v1/search?type=artist&q=".$artist;
		$json_art = file_get_contents($url_art);
		$tab = json_decode($json_art, True);
		
		$ajout = new Artiste();
		$ajout->setNom($tab ['artists']['items'][0]['name']);
		$ajout->setPhoto($tab ['artists']['items'][0]['images'][2]['url']);
		$ajout->setGenres($tab ['artists']['items'][0]['genres']);
		$ajout->setPopularite($tab ['artists']['items'][0]['popularity']);
		$ajout->setLien($tab ['artists']['items'][0]['external_urls']['spotify']);
		$ajout->setExternal_id($tab ['artists']['items'][0]['id']);
		
		$url_alb = "https://api.spotify.com/v1/search?type=album&q=".$artist;
		$json_alb = file_get_contents($url_alb);
		$tabalbums = json_decode($json_alb, True);
		
		$ajout_alb = new Albums();
		foreach ($tabalbums['albums']['items'] as $ligne) //probleme ajoute juste la derniere ligne
		{	
			$ajout_alb->setAlbNom($ligne ['name']);
			$ajout_alb->setAlbImage($ligne ['images'][2]['url']);
			$ajout_alb->setAlbLink($ligne ['external_urls']['spotify']);
			$ajout_alb->setAlbExternalId($ligne ['id']);
			$ajout_alb->setAlbType($ligne ['album_type']);
		}
		$em->persist($ajout_alb);
		$em->persist($ajout);
		$em->flush();
		$artistes = str_replace(' ', '_', $tab ['artists']['items'][0]['name']);
		
		return $this->redirect($this->generateUrl('afpa_artiste_detail', array('artiste' => $artistes)));
		
	}
}
