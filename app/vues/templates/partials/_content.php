<?php
/*

      ./app/vues/template/partials/_content.php

 */
?>
<div class="container">
  <div class="row">
    <!-- CONTENU DYNAMIQUE -->
    <div class="col-md-8">
      <?php echo $content; ?>
    </div>
    <!-- Blog Sidebar Widgets Column -->
    <?php include_once '../app/vues/templates/partials/_sidebar.php'; ?>
  </div>
  <hr>
</div>
