<?php
/*

   ./app/controleurs/AuteursControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\PostsGestionnaire; 

class AuteursControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'auteurs';
      parent::__construct(); 
   }
   
}
 