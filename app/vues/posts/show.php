<?php
/*

      ./app/vues/pages/show.php
      Varibles disponibles :
         - $post : OBJ Page(id, titre, texte)

 */
?>

<?php
use \Noyau\Classes\Template;
?>

<!-- Affectation de $title  -->
<?php Template::startZone(); ?>
<?php echo $post->getTitre(); ?>
<?php Template::stopZone('title'); ?>


<!-- Affectation de $content  -->
<?php Template::startZone(); ?>
   <h1><?php echo $post->getTitre(); ?></h1>
   <div><?php echo $post->getTexte(); ?></div>
   <hr>
<?php Template::stopZone('content');?>
   
   

