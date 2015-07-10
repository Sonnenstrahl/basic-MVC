<?php
namespace App;

use App\Controller\Controller;

ini_set('display_errors','ON');
error_reporting(-1);

include_once("Controller/Controller.php");
include_once("Model/Database.php");
include_once("Model/UserService.php");
include_once("Model/User.php");
include_once("config.php");

$controller = new Controller();
$controller->invoke();
?>