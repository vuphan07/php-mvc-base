<?php
require './core/Database.php';
require './models/BaseModel.php';
require './controllers/BaseController.php';
session_start();
$baseModel = new BaseModel();
$controllerName = ucfirst(($_REQUEST['controller'] ?? 'notFound') . 'Controller');
$actionName = $_REQUEST['action'] ?? 'index';
require "./controllers/${controllerName}.php";

$objectController = new $controllerName;
$objectController->$actionName();
