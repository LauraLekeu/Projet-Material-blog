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
   CTRL : PostsControleur
   ACTION : SHOWACTION
   */ 
   include_once '../app/routeurs/categoriesRouteur.php';
   
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