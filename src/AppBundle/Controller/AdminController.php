<?php

namespace AppBundle\Controller;

use AppBundle\Manager\ProduitManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{

	private function getManager()
	{
		return new ProduitManager($this->getDoctrine()->getManager());
	}

	/**
	 * @Route("/admin/produits", name="admin_Produit")
	 */
	public function indexAction()
	{
		// Obtention du manager puis des produits
		$produits = $this->getManager()->loadAllProduits();
		return $this->render('admin/produits.html.twig', array("arrayProduits" => $produits));
	}
}
