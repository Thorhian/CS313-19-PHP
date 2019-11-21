<?php

include("generalFunctions.php")

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php insertCSS() ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="http://browsehappy.com/">upgrade your browser</a> to improve
            your experience.
            </p>
        <![endif]-->

        <div>
            <form action="loginAuthentication.php">
                Username <br>
                <input type="text" name="username"><br>
                Password <br>
                <input type="password" name="password"><br>
            </form>
        </div>

    </body>
</html>
