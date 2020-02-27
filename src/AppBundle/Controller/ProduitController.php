<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Tailles;
use AppBundle\Manager\ProduitManager;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends Controller
{

	private function getManager()
	{
		return new ProduitManager($this->getDoctrine()->getManager());
	}

	/**
	 * @Route ("/{genre}/{type}/{id}", name="need_produit_id")
	 * @param $genre
	 * @param $type
	 */

	public function indexAction($genre,$type,$id)
	{
		$produit = $this->getManager()->loadProduit($id);
		$taille = $this->getManager()->findAllTaille($produit->getIdTaille());
		return $this->render('need/produit.html.twig', array('produit'=> $produit, 'arrayTailles' => $taille, 'genre' => $genre, 'type' => $type));
	}
}
