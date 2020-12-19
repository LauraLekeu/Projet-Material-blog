<?php
/*

      ./app/vues/templates/index.php

 */
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Head -->
    <?php include_once '../app/vues/templates/partials/_head.php'; ?>
  </head>
  <body>
    <!-- Navigation -->
    <?php include_once '../app/vues/templates/partials/_nav.php'; ?>
    <!-- Page Content -->
    <?php include_once '../app/vues/templates/partials/_content.php'; ?>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="page-footer info-color darken-1" if="footer">
      <?php include_once '../app/vues/templates/partials/_footer.php'; ?>
    </footer>
    <!-- SCRIPTS -->
    <?php include_once '../app/vues/templates/partials/_scripts.php'; ?>
  </body>
</html>