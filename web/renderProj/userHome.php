<?php
session_start();
if(!isset($_SESSION['userID'])) {
    header('Location: login.php');
    die();
}
require('/renderProj/generalFunctions.php')
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Homepage</title>
        <meta name="description" content="Welcome to the RenderLab!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php insertCSS() ?>
    </head>
    <body>
        <div class="container">
            <nav class="nav navbar">

            </nav>
        </div>
        <div class="container">
            <h1> Welcome <?php echo $_SESSION['username']?>! </h1>
        </div>
    
    </body>
</html>
