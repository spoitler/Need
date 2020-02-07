<?php


namespace AppBundle\Manager;

use AppBundle\Entity\Produits;
use Doctrine\ORM\EntityManager;

class ProduitManager
{
	protected  $entityManager;
	protected $repository;

	public function __construct(EntityManager $em)
	{
		$this->entityManager = $em;
		$this->repository = $em->getRepository('AppBundle:Produits');
	}

	/**
	 * Load all produit entity
	 *
	 * @return Produits[]
	 *
	 */

	public function loadAllProduits()
	{
		$produits = $this->repository->findAll();
		return $produits;
	}

	/**
	 * @param Integer $produitId
	 * @return Produits
	 */

	public function loadProduit($produitId)
	{
		return $this->repository->find($produitId);
	}

	/**
	 * save Film entity
	 *
	 * @param Integer $produitId
	 * @throws \Doctrine\ORM\OptimisticLockException
	 */

	public function removeProduit(Produits $produit)
	{
			$this->entityManager->remove($produit);
			$this->entityManager->flush();
	}




}