<?php


namespace AppBundle\Manager;

use AppBundle\Entity\Tailles;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Join;

class TailleManager
{

	protected  $entityManager;
	protected $repository;

	public function __construct(EntityManager $em)
	{
		$this->entityManager = $em;
		$this->repository = $em->getRepository('AppBundle:Tailles');
	}

	/**
	 * Load all produit entity
	 *
	 * @return Tailles[]
	 *
	 */

	public function loadAllTailleType($taille)
	{
		$query = $this->repository->findBy(['id_type' => $taille]);
		$tailles = $query->getResult();
		return $tailles;
	}



}