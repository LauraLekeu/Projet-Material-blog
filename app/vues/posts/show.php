<?php
/*

      ./app/vues/pages/show.php
      Varibles disponibles :
         - $post : OBJ Page(id, titre, texte)

 */
?>

<!-- Title -->
 <h1><?php echo $post->getTitre(); ?></h1>

 <!-- Author -->
 <p class="lead">
   by <a href="#">pascal</a>
 </p>

 <hr>

 <!-- Date/Time -->
 <p>Posted on
   Thu 02 Feb 2017</p>

 <hr>

 <!-- Preview Image -->
 <img class="img-responsive z-depth-2" src="http://lorempixel.com/750/390/technics/2" alt="">

 <hr>

 <!-- Post Content -->
 <div><?php echo $post->getTexte(); ?></div>

 <hr>