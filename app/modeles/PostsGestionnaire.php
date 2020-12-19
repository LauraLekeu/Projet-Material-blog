<?php
/*

      ./app/modeles/PostsGestionnaire.php

 */
 
 namespace App\Modeles;

 class PostsGestionnaire {
   
  public function findOneById() {
    // SQL
    $post = [
       'id'    => 1,
       'titre' => "Titre poste 1",
       'texte' => "Lorem Ipsum..."
    ];
    return new Post($post);
  }
 }
 