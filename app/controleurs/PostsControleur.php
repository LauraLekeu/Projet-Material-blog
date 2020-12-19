<?php
/*

   ./app/controleurs/PostsControleur.php

*/

namespace App\Controleurs; 

class PostsControleur {
  
  public function showAction() {
    $gestionnaire = new \App\Modeles\PostsGestionnaire();
    $post = $gestionnaire->findOneById();

    GLOBAL $content, $title;
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
  }

}
