<?php
/*

      ./noyau/classes/ModeleGenerique.php

 */
 namespace Noyau\Classes;

 abstract class ModeleGenerique {

   public function __construct(array $data = null) {
     if ($data) :
       $this->hydrater($data);
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
