<?php
/*

      ./app/modeles/CatégoriesGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class AuteursGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

   public function __construct() {
      $this->_table = 'auteurs';
      $this->_class = '\App\Modeles\Auteurs';
   }

 }