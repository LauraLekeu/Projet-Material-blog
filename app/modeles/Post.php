<?php
/*

      ./app/modeles/Post.php

 */

 namespace App\Modeles;

 class Post extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_titre, $_texte;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getTitre() {
      return $this->_titre;
   }

   public function getTexte() {
      return $this->_texte;
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

   public function setTexte(string $data = null) {
      if (isset($data)):
        $this->_texte = $data;
      endif;
   }

 }
