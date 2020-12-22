<?php
/*

      ./app/vues/categories/index.php
      Liste des catégories
      Variables disponnibles : ARRAY(OBJ Actualite(id, ))

 */
?>


<h4>Categories</h4>

<ul class="collection">
   <?php foreach($categories as $categorie): ?>
      <li>
         <a href="#"> 
            <?php echo $categorie->getTitre(); ?> 
         </a>
      </li>
   <?php endforeach; ?>
</ul>