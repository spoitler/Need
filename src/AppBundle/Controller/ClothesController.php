<?php

namespace AppBundle\Controller;

use AppBundle\Manager\ProduitManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ClothesController extends Controller
{

	private function getManager()
	{
		return new ProduitManager($this->getDoctrine()->getManager());
	}

	/**
	 * @Route ("/homme", name="need_all_categories")
	 * @throws \Doctrine\ORM\ORMException
	 */

    public function indexAction()
    {
    	$produits = $this->getManager()->loadAllProduitsHomme();
        return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "homme", 'categories' => "Toutes catégories"));
    }

	/**
	 * @Route ("/femme", name="need_femme")
	 */

	public function femmeAction()
	{
		$produits = $this->getManager()->loadAllProduits();
		return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "femme", 'categories' => "Toutes catégories"));
	}

	/**
	 * @Route ("/femme/vestes", name="need_femme_veste")
	 */

	public function vesteAction()
	{
		$produits = $this->getManager()->loadProduit(0);
		return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "femme", 'categories' => "Vestes"));
	}
}
