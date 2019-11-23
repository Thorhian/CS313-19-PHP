<?php

include("generalFunctions.php")

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <meta name="description" content="">
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

        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Render Labs</a>
                </div>
                <ul class="nav navbar navbar-right">
                    <li>Hello There!</li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <form action="loginAuthentication.php" class="form-signin">
                Username <br>
                <input type="text" name="username"><br>
                Password <br>
                <input type="password" name="password"><br>
                <input type="submit" value="Login">
            </form>
        </div>

    </body>
</html>
