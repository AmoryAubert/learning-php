<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$request = $_GET['page'];

switch ($request) {
    case '' :
    require './views/template/app.php';
    break;

    case 'Home' :
    require './views/template/app.php';
    break;

    case 'Lions' :
    require './views/template/app.php';
    break;
    
    case 'Limpada' :
    require './views/template/app.php';
    break;

    case 'Crocodile' :
    require './views/template/app.php';
    break;

    case 'Elephant' :
    require './views/template/app.php';
    break;

    case 'Tigre' :
    require './views/template/app.php';
    break;

    default:
    require './views/template/app.php';
}


