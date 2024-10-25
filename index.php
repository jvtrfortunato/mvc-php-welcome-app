<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'WelcomeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'showForm';

require_once "controllers/$controller.php";
$controller = new $controller();
$controller->$action();