<?php

/**
 * BudgetCategorieTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BudgetCategorieTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object BudgetCategorieTable
     */
    
    public function getCategories($asso_id)
    {
		$q = $this->createQuery('q')
      			  ->where('q.asso_id = ?', $asso_id);
		return $q->execute();
    }
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('BudgetCategorie');
    }
}