<?php
/*

      ./app/vues/auterus/index.php
      Liste des auteurs

 */

use \Noyau\Classes\Template;

?>

<?php Template::startZone(); ?>
<h4>Auteurs</h4>

<ul class="collection">
   <?php foreach($auteurs as $auteur): ?>
      <li>
         <a href="auteur/<?php echo $auteur->getId(); ?>"> 
            <?php echo $auteur->getPseudo(); ?> 
         </a>
      </li>
   <?php endforeach; ?>
</ul>
<?php Template::stopZone('content'); ?>