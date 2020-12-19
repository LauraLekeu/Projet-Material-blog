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
 }