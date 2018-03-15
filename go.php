<?php
    require_once "library.php";

    $path = pathToFile($_GET['u']);

    if (file_exists($path)) {
        $long_url = trim(file_get_contents($path));
        header('Location: http://' . $long_url . '/');
    } else {
        header("HTTP/1.0 404 Not Found");
    }

    exit;
    