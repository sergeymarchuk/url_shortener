<?php
    require_once "library.php";

    $path = pathToFile($_GET['u']);

    $long_url = trim(file_get_contents($path));

    