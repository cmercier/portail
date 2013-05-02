<?php

/**
 * BudgetPoste
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class BudgetPoste extends BaseBudgetPoste
{
    public function getTotal() {
            return $this->getPrixUnitaire() * $this->getNombre();
    }
    public function __toString()
    {
      return $this->getNom();
    }

    public function getSumPoste(){
    	$s = Doctrine_Query::create()->from('Transaction t') //BudgetPosteTable::getInstance()->createQuery('q')
                        ->select('SUM(t.montant) AS sumPoste')
                        ->where('t.budget_poste_id=?', $this->getPrimaryKey())
                        ->andWhere('t.deleted_at IS NULL')->fetchOne();
		return $s['sumPoste'];
    }
}