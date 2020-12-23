<?php
/*

      ./app/vues/pages/show.php
      Varibles disponibles :
         - $post : OBJ Page(id, titre, texte)

 */
?>

<h4>Les postes : </h4>

<ul class="collection">
   <?php foreach($posts as $post): ?>
      <li>
         <a href="page/<?php echo $post->getId(); ?>"> 
            <?php echo $post->getTitre(); ?> 
         </a>
      </li>
   <?php endforeach; ?>
</ul>
   

