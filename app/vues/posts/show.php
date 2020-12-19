<?php
/*

      ./app/vues/pages/show.php
      Varibles disponibles :
         - $post : OBJ Page(id, titre, texte)

 */
?>

<!-- Title -->
 <h1><?php echo $post->getTitre(); ?></h1>

 

 <!-- Post Content -->
 <div><?php echo $post->getTexte(); ?></div>

 <hr>