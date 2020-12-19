<?php
/*

      ./app/modeles/PostsGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class PostsGestionnaire {
   
  public function findOneById(int $id =6) {
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return new Post($rs->fetch(\PDO::FETCH_ASSOC));
  }


  public function findAll() {
   $sql = "SELECT *
           FROM posts
           ORDER BY id ASC
           LIMIT 3;";
   $rs = App::getConnexion()->prepare($sql);
   $rs->execute();
   $posts = $rs->fetchAll(\PDO::FETCH_ASSOC);

   $tab = [];
   foreach($posts as $post):
      $tab[] = new Post($post);
   endforeach;
   return $tab;
 }
 }