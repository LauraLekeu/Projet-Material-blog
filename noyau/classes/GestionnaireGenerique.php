<?php
/*

      ./noyau/classes/GestionnaireGenerique.php 
      Classes de l'application

 */

namespace Noyau\Classes;
use \Noyau\Classes;

abstract class GestionnaireGenerique {

   protected $_tableName, $_class;

   // METHODES CRUD 

   public function findOneById(int $id) {
      $sql = "SELECT *
              FROM `{$this->_table}`
              WHERE id = :id;";
      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
    }

    public function findAll() {
      $sql = "SELECT *
              FROM `{$this->_table}`
              ORDER BY id ASC
              LIMIT 3;";
      $rs = App::getConnexion()->prepare($sql);
      $rs->execute();
      $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);
   
      
      return $this->fromAssocToObject($tab, $this->_class);
    }



   // AUTRES METHODES 

   protected function fromAssocToObject(array $rs, string $class) { // La fonction va convertir un tableau rs en objet de type 'Post' 
      $tab = [];
      foreach($rs as $r):
         $tab[] = new $this->_class($r);
      endforeach;
      return $tab;
   } 

}
