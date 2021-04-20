<?php
require_once "Controllers/TemplateController.php";
require_once "Controllers/profile.controller.php";
require_once "Controllers/message.controller.php";
require_once "Controllers/ballina.controller.php";

require_once "Models/profile.models.php";
require_once "Models/message.models.php";
require_once "Models/ballina.models.php";

$Template = new TemplateController();
$Template->ViewTemplate();

?>
