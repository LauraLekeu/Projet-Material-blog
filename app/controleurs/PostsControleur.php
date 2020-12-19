<?php
/*

   ./app/controleurs/PostsControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\PostsGestionnaire; 

class PostsControleur {
  
  public function showAction(int $id = 1 ) {  // Détail du poste 1 par défaut
    $gestionnaire = new PostsGestionnaire (); // Créer un new objet PostsGestionnaire
    $post = $gestionnaire->findOneById($id);  // Lancer la méthode findOneById (envoyer l'id)

    GLOBAL $content, $title;
    $title = $post->getTitre();
    ob_start();
      include '../app/vues/posts/show.php';
    $content = ob_get_clean();
  }

}
 