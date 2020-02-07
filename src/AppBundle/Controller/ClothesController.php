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
     */

    public function indexAction()
    {
    	$produits = $this->getManager()->loadAllProduits();
        return $this->render('homme.html.twig', array('arrayProduits' => $produits));
    }
}
