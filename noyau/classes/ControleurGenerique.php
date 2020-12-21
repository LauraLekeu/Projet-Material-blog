<?php
/*

      ./noyau/classes/ControleurGenerique.php 

 */

namespace Noyau\Classes;

abstract class ControleurGenerique {

   protected $_gestionnaire, $_tableName;

   public function __construct() {
      $gestionnaireName = '\App\Modeles\\' . ucfirst($this->_tableName) . 'Gestionnaire';
      $this->_gestionnaire = new $gestionnaireName;
   }
    

   public function showAction($data, string $field = 'id') {  // Détail du poste 1 par défaut

      $r = substr($this->_tableName, 0, -1);   // r = record
      $methodName = 'findOneBy' . ucfirst($field);
      $$r = $this->_gestionnaire->$methodName($data); // $$r = Variable dynamique ($ suivit d'un string)
 
      include '../app/vues/' . $this->_tableName . '/show.php';

    }

    public function indexAction() {
      $r = $this->_tableName ;
      $$r = $this->_gestionnaire->findAll(); 
      include '../app/vues/' . $this->_tableName . '/index.php';
   }

}
