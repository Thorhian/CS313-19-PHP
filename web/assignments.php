
<?php
include './usefulFunctions.php';
?>

<!doctype html>
<html class="" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JTB's Homepage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <?php insert_bootSCSS();?>
        <link rel="stylesheet" href="homepage.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser. Please
            <a href="http://browsehappy.com/">upgrade your browser</a> to improve
            your experience.
            </p>
        <![endif]-->


        <div class="container">
            <h1 class="header jumbotron">
                The Lab
            </h1>
            <div class="row">
                <div class="col-4">
                    <a href="homepage.php">Back to Homepage</a>
                </div>
                <div class="col-6">
                    <a href="https://github.com/Thorhian">To My Github Account </a>
                </div>
            </div>
        </div>

        <div class="container">
            <p> More to be added </p>
        </div>
        <?php
        insert_bootSJS();
        ?>
    </body>
</html>
