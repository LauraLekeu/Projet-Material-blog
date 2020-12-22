<?php
/*

      ./noyau/classes/ModeleGenerique.php

 */
 namespace Noyau\Classes;

 abstract class ModeleGenerique {

   protected $_dateCreation;

   // Constructeur
   public function __construct(array $data = null) {
     if ($data) :
       $this->hydrater($data);
     endif;
   }

   // GETTERS 
   public function getDateCreation(){
      return $this->_dateCreation;
   }

   // SETTERS
   public function setDateCreation($data = null) {
      if (isset($data)):
         $this->_dateCreation = $data;
      endif;
   }

   // Hydrateur
   public function hydrater(array $data = null){
      if ($data) :
         foreach ($data as $propriete => $valeur) :
            $nomMethode = 'set' . ucfirst($propriete);
            if (method_exists($this, $nomMethode)) :
            $this->$nomMethode($valeur);
            endif;
         endforeach;
      endif;
   }
 }
