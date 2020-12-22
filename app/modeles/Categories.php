<?php
/*

      ./app/modeles/Post.php

 */

 namespace App\Modeles;

 class Categories extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_titre, $_slug;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getTitre() {
      return $this->_titre;
   }

   public function getSlug() {
      return $this->_slug;
   }
    
   // SETTERS 
   public function setId(int $data = null) {
      if (isset($data)):
        $this->_id = $data;
      endif;
   }

   public function setTitre(string $data = null) {
      if (isset($data)):
        $this->_titre = $data;
      endif;
   }

   public function setSlug(string $data = null) {
      if (isset($data)):
        $this->_slug = $data;
      endif;
   }

 }
