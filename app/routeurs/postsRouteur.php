<?php
/*

      ./app/routeurs/postsRouteur.php

 */

$ctrl = new App\Controleurs\PostsControleur();
$ctrl->showAction($_GET['pageId']); 

if($_GET['pageId'] == 5): 
   $ctrl = new \App\Controleurs\AuteursControleur();
   $ctrl->indexAction([
      'limit'  => 15,
      'orderField' => 'pseudo',
      'orderSens' => 'asc'
   ]);
   endif;
   
 