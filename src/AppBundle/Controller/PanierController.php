<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends Controller
{

	/**
	 * @Route ("/panier", name="need_panier")
	 */

	public function indexAction()
	{
		return $this->render('panier.html.twig', array());
	}
}
