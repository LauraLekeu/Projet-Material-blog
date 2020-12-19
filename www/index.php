<?php
/*

      ./www/index.php --- DISPATCHER CENTRAL

*/

require_once '../vendor/autoload.php';

require_once '../noyau/init.php';

require_once '../app/routeur.php';

require_once '../app/vues/templates/index.php';

unset($connexion);