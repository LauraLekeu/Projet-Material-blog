<?php
/*

      ./app/routeurs/categoriesRouteur.php

 */

$ctrl = new App\Controleurs\AuteursControleur();
$ctrl->showAction($_GET['auteurId']); 

