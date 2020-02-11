<?php


namespace AppBundle\Manager;

use AppBundle\AppBundle;
use AppBundle\Entity\Genres;
use AppBundle\Entity\Produits;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
	 * Load all produit entity for homme
	 *
	 * @return Produits[]
	 *
	 * @throws \Doctrine\ORM\ORMException
	 */

	public function loadAllProduitsHomme()
	{
		$query = $this->repository->createQueryBuilder('p')
			->innerJoin('AppBundle:Genres', 'g', Join::WITH, 'p.idGenre = g.idGenre')
			->where('g.genre = :genre ')
			->setParameter('genre', 'hom')
			->getQuery();

//		$query = $this->entityManager->createQuery(
//			'SELECT p
//			    FROM AppBundle:Produits p, AppBundle:Genres g
//			    WHERE p.idGenre = g.idGenre
//			    AND g.genre = :genre'
//		)->setParameter('genre', 'hom');

		$produits = $query->getResult();
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