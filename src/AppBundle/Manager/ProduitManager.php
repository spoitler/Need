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

	public function loadAllProduitsGenre($genre)
	{
		$query = $this->repository->createQueryBuilder('p')
			->select('p', 't.type')
			->innerJoin('AppBundle:Genres', 'g', Join::WITH, 'p.idGenre = g.idGenre')
			->innerJoin('AppBundle:Types', 't', Join::WITH, 'p.idType = t.idType')
			->where('g.genre = :genre ')
			->setParameter('genre', $genre)
			->getQuery();

//		$query = $this->entityManager->createQuery(
//			'SELECT p
//			    FROM AppBundle:Produits p, AppBundle:Genres g
//			    WHERE p.idGenre = g.idGenre
//			    AND g.genre = :genre'
//		)->setParameter('genre', 'hom');

		$produits = $query->getResult();
//		var_dump($produits);
		return $produits;
	}

	public function loadAllProduitsType($genre, $type)
	{
		$query = $this->repository->createQueryBuilder('p')
			->select('p','t.type')
			->innerJoin('AppBundle:Genres', 'g', Join::WITH, 'p.idGenre = g.idGenre')
			->innerJoin('AppBundle:Types', 't', Join::WITH, 'p.idType = t.idType')
			->where('g.genre = :genre')
			->andWhere('t.type = :type')
			->setParameter('genre', $genre)
			->setParameter('type', $type)
			->getQuery();

//		$query = $this->entityManager->createQuery(
//			'SELECT p,t.type
//			    FROM AppBundle:Produits p, AppBundle:Genres g, AppBundle:Types t
//			    WHERE p.idGenre = g.idGenre
//			    AND p.idType = t.idType
//			    AND g.genre = :genre
//			    AND t.type = :type'
//		)->setParameters(array('genre' => $genre, 'type' => $type));



		$produits = $query->getResult();
//		var_dump($produits);

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
	 * remove Produit entity
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