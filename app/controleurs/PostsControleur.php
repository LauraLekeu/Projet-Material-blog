<?php
/*

   ./app/controleurs/PostsControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\PostsGestionnaire; 

class PostsControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'posts';
      parent::__construct(); // Lancer le construct parent
   }
   
}
 