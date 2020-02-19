<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends EntityRepository
{

	public function finAllTailleTypeByProduit($idProduit)
	{
		return $this->getEntityManager()->getRepository('AppBundle:Produits')->createQueryBuilder('p')
			->select('ta')
			->innerJoin('AppBundle:Types', 't', Join::WITH, 'p.idType = t.idType')
			->innerJoin('AppBundle:Tailles', 'ta', Join::WITH, 't.idType = ta.idType')
			->where('ta.idType = :taille')
			->setParameter('taille', $idProduit)
			->getQuery();
	}
}
