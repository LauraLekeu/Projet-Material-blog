<?php
/*

      ./app/vues/categories/show.php
      Vue des catégories
      Variables disponnibles : ARRAY(OBJ Actualite(id, titre, texte, dateCreation ))

 */

use \Noyau\Classes\Template;

?>

<!-- Affectation de $title  -->
<?php Template::startZone(); ?>
<?php echo $categorie->getTitre(); ?>
<?php Template::stopZone('title'); ?>


<!-- Affectation de $content  -->
<?php Template::startZone(); ?>
   <h1>Catégorie n°<?php echo $categorie->getId(); ?></h1>
   <h2><?php echo $categorie->getTitre(); ?></h2>
   <hr>
<?php Template::stopZone('content');?>
   
   
