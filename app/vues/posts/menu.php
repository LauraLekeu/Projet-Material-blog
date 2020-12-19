<?php
/*

      ./app/vues/pages/menu.php
      Varibles disponibles :
         - $post : OBJ Page(id, titre, texte)

 */
?>

<ul class="nav navbar-nav">
   <?php foreach($posts as $post): ?>
   <li><a href="page/<?php echo $post->getId(); ?>"> <?php echo $post->getTitre(); ?> </a></li>
   <?php endforeach; ?>
</ul>