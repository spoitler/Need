<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends Controller
{

	/**
	 * @Route ("/{genre}/{type}/{id}", name="need_produit_id")
	 * @param $genre
	 * @param $type
	 */

	public function indexAction($genre,$type,$id)
	{
		return $this->render('produit.html.twig', array());
	}
}
