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
	 * @Route ("/homme", name="need_homme")
	 * @throws \Doctrine\ORM\ORMException
	 */

    public function indexAction()
    {
    	$produits = $this->getManager()->loadAllProduitsGenre("hom");
        return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "homme", 'categories' => "Toutes catégories"));
    }

	/**
	 * @Route ("/femme", name="need_femme")
	 */

	public function femmeAction()
	{
		$produits = $this->getManager()->loadAllProduitsGenre("fem");
		return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "femme", 'categories' => "Toutes catégories"));
	}

	/**
	 * @Route ("/homme/{filter}", name="need_homme_filter")
	 * @param $filter
	 */

	public function hommeFilterAction($filter)
	{
		$title = ucwords($filter,"-");
		$produits = $this->getManager()->loadAllProduitsType("hom", $filter);
		return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "homme", 'categories' => $filter));
	}

	/**
	 * @Route ("/femme/{filter}", name="need_femme_filter")
	 * @param $filter
	 */

	public function femmeFilterAction($filter)
	{
		$title = ucwords($filter,"-");
		$produits = $this->getManager()->loadAllProduitsType("fem", $filter);
		return $this->render('clothes.html.twig', array('arrayProduits' => $produits, 'genre' => "femme", 'categories' => $filter));
	}
}
