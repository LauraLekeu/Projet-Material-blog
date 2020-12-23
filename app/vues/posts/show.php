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
   <div>Publié le </div> <time><?php echo $post->getDatePublication(); ?></time>
   <div><?php echo $post->getTexte(); ?></div>


   <?php 
   if($post->getId() === 4): 
   $ctrl = new \App\Controleurs\PostsControleur();
   $ctrl->indexAction([
      'limit'  => 15,
      'orderField' => 'datePublication',
      'orderSens' => 'desc',
      'offset' => 5
   ]);
   endif;

   ?>
   
   
   <hr>
<?php Template::stopZone('content');?>
   
   

