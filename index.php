<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>local url shortener</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="text-center">

<?php 
    error_reporting(E_ALL);

    const SHORT_URL_LENGTH = 6;
    const TIME_OF_LIFE_COOKIE = 900; // time in seconds

    require_once "library.php";
    require_once "linksList.php";
?>

    <form class='form-signin mt-5' action='index.php' method='post' style="width: 30%; min-width: 350px; margin: auto;">
        <h1 class="h3 mb-3 font-weight-normal">Pleae sign in</h1>
        <input class="mb-3 btn-block" type='text' placeholder='your long URL' name='url'>
        <button class="btn btn-lg btn-primary btn-block" type="submit">add new adress</button>
        <p class="mt-5 mb-3 text-muted">&copy MARICH 2018</p>
    </form>
<?php
    if (!empty($_POST['url'])) {
        $long_url = $_POST['url'];
        $short_url = getShortUrl();

        writeToFile($short_url, $long_url);
        setcookie("listUrl[]", $short_url, time() + TIME_OF_LIFE_COOKIE);
    }
?>  
</body>
</html>
