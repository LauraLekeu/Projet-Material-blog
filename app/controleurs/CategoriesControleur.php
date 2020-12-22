<?php
/*

   ./app/controleurs/CatagoriesControleur.php

*/

namespace App\Controleurs; 

class CategoriesControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_tableName = 'categories';
      parent::__construct(); 
   }

}
 