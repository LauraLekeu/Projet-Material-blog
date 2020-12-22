<?php
/*

      ./app/routeurs/categoriesRouteur.php

 */

$ctrl = new App\Controleurs\CategoriesControleur();
$ctrl->showAction($_GET['categoriesId']); 