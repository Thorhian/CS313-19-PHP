<?php
session_start();
if(!isset($_SESSION['userID'])) {
    header("login.php");
    die();
}

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Homepage</title>
        <meta name="description" content="Welcome to the RenderLab!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <h1> Welcome <?php echo $_SESSION['username']?>! </h1>

    </body>
</html>
