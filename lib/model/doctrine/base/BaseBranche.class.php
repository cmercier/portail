<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Branche', 'doctrine');

/**
 * BaseBranche
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Profile
 * 
 * @method string              getName()    Returns the current record's "name" value
 * @method Doctrine_Collection getProfile() Returns the current record's "Profile" collection
 * @method Branche             setName()    Sets the current record's "name" value
 * @method Branche             setProfile() Sets the current record's "Profile" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBranche extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('branche');
        $this->hasColumn('name', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Profile', array(
             'local' => 'id',
             'foreign' => 'branche_id'));
    }
}