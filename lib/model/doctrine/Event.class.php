<?php

/**
 * Event
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Event extends BaseEvent {

  public function getPole() {
    $asso = $this->getAsso();
    return ($asso->isPole()) ? $asso->getPoleInfos() : $asso->getPole();
  }

  public function getAffiche_prefixed() {
    return "/uploads/events/" . $this->getAffiche();
  }

  public function getGaleries(){
        $q = GaleriePhotoTable::getInstance()->createQuery('gal')->select('gal.*')
            ->where('gal.event_id = ?', $this->getId());
        return $q;
    }

  public function userIsPhotographer($user){
    // A user is photographer at an event if he is photographer for the main asso
    // of the event or for one of the guest assos.
    if ($user->isAuthenticated()){
      if($user->getGuardUser()->hasAccess($this->getAsso()->getLogin(), 0x200))
          return true;
      foreach ($this->getGuestAsso() as $guest_asso) {
          if($user->getGuardUser()->hasAccess($guest_asso->getLogin(), 0x200))
          return true;
      }
      
    }
    return false;
  }

}

