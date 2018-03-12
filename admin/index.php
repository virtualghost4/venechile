<?php

require_once 'models/linksModel.php';
require_once 'models/accessModel.php';


require_once 'controllers/linksController.php';
require_once 'controllers/accessController.php';
require_once 'controllers/viewsController.php';


$view = new viewsController();
$view -> view();
?>
