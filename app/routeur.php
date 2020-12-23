<?php
/*

      ./app/routeur.php

 */


 if(isset($_GET['pageId'])):
    /*
   DETAIL D'UNE PAGE (menu)
   PATTERN : /
   CTRL : PostsControleur
   ACTION : SHOWACTION
   */ 
   include_once '../app/routeurs/postsRouteur.php';

elseif(isset($_GET['categoriesId'])):
   /*
   DETAIL D'UNE PAGE (menu)
   PATTERN : /
   CTRL : CategorieControleur
   ACTION : SHOWACTION
   */ 
   include_once '../app/routeurs/categoriesRouteur.php';
   
elseif(isset($_GET['auteurId'])):
   /*
   DETAIL D'UN AUTEUR 
   PATTERN : /
   CTRL : AuteurControleur
   ACTION : SHOWACTION
   */ 
   include_once '../app/routeurs/auteursRouteur.php';
   
      
 else:
   /*
   ROUTE PAR DEFAUT 
   PATTERN : /
   CTRL : PostsControleur
   ACTION : SHOWACTION
   */ 
   $ctrl = new App\Controleurs\PostsControleur();
   $ctrl->showAction(1); 

 endif;