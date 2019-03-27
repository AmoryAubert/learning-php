<?php
    if($request == 'Home' OR $request =='') require './views/home.php';
    else if($request == 'Lions') require './views/lion.php';
    else if($request == 'Limpada') require './views/limpada.php';
    else if($request == 'Crocodile') require './views/crocodile.php';
    else if($request == 'Elephant') require './views/elephant.php';
    else if($request == 'Tigre') require './views/tigre.php';
    else require './views/error.php';