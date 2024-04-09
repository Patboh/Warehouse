<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--style css-->
    <link rel="stylesheet" href="css/style.css">
    <title>Automatic Warehouse</title>
</head>

<body>
    
    <div class="index-page">
        <div class="title-box">
            <?php include('db_connect.php') ?>
            <h2>WELCOME TO</h2><br>
            <h1>AUTOMATIC WAREHOUSE SYSTEMS</h1><br>
            <p>Silpakorn University</p>
            <div>                
                <div class="btn-signin">
                    <a href="login.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>