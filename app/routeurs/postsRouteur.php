<?php
/*

      ./app/routeurs/postsRouteur.php

 */

$ctrl = new App\Controleurs\PostsControleur();
$ctrl->showAction($_GET['pageId']); 