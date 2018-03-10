<?php
    require_once "library.php";

    $path = pathToFile($_GET['u']);

    $long_url = file_get_contents($path);
    
