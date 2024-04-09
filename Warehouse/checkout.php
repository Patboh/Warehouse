<?php
session_start();
include('db_connect.php');
// check login? //
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
// log out -> clear session//
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMATIC WAREHOUSE</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <div class=logo-nav><a href="home.php">Warehouse</a></div>
        <div class="boxbar">
            <button class="nav-item "><a href="checkin.php"> Check in</a></button>
            <button class="nav-item active"><a href="checkout.php"> Check out</a></button>
            <?php if (isset($_SESSION['username'])) : ?>
                <!-- for log out -->
                <button class="nav-item"><a href="index.php?logout='1' ">Logout</a></button>
            <?php endif ?>
        </div>
    </div>
    </div>
    <div class="space2">
        <div class="left-side">
            <div class="left-container">
                <div class="">
                    <li>A1</li>
                    <li>A2</li>
                    <li>A3</li>
                </div>

                <div>
                    <li>B1</li>
                    <li>B2</li>
                    <li>B3</li>
                </div>

                <div>
                    <li>C1</li>
                    <li>C2</li>
                    <li>C3</li>
                </div>
            </div>
        </div>
        <div class="right-side">
            <h2>CHECK OUT</h2>
            <form action="checkout.php" method="post">
                <lable for="product-id">Product ID</lable>
                <select name="Product-id" id="product-id">
                    <option value="">Choose...</option>
                    <option value="red">61000</option>
                    <option value="blue">45000</option>
                    <option value="green">27000</option>
                </select>
                <br>
                <lable for="product-color">Product Color</lable>
                <select name="Product-color" id="product-color">
                    <option value="">Choose...</option>
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>

                </select>
                <div>
                    <button class="btn2" type="submit">
                        <p>Submit</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- js scripts -->
    <script src="js/script.js"></script>