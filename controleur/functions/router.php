<?php
    if($request == 'Accueil' OR $request =='') require './view/accueil.php';
    else if($request == 'Lion') require './view/lion.php';
    else if($request == 'Impala') require './view/impala.php';
    else if($request == 'Crocodile') require './view/crocodile.php';
    else if($request == 'Elephant') require './view/elephant.php';
    else if($request == 'Tigre') require './view/tigre.php';
    else require './view/404.php';