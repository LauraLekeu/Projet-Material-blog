<?php
/*

      ./app/vues/template/partials/_nav.php

 */
?>
<nav class="navbar navbar-default z-depth-2 info-color">
  <div class="container ">
    <div class="navbar-header">
      <a class="navbar-brand waves-effect waves-light" href="<?php echo \Noyau\Classes\App::getRoot(); ?>">
      Mon Super Blog
      </a>
    </div>

    <?php 
      $ctrl = new \App\Controleurs\PostsControleur();
      $ctrl->indexAction([
         'view' => 'menu',
         'orderByField' => 'id', 
         'limit' => 5
      ]);
    ?>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form action="posts/search" method="get" class="navbar-form navbar-right waves-effect waves-light" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
      </form>
    </div>
  </div>
</nav>
