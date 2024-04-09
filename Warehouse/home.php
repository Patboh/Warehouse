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

    $sql = "SELECT * FROM user ";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMATIC WAREHOUSE</title>
    <!-- css -->
    <link rel="stylesheet" href = "css/style.css">
</head>
<body>
    <div class="navbar">
        <div class=logo-nav><a href="home.php">Warehouse</a></div>
            <div class="boxbar">
                <button class="nav-item"><a href="checkin.php"> Check in</a></button>
                <button class="nav-item "><a href="checkout.php"> Check out</a></button>
                <?php if (isset($_SESSION['username'])) :?>
                    <!-- for log out -->
                    <button class="nav-item"><a href="index.php?logout='1' ">Logout</a></button>
                <?php endif ?>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- noti message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <p>
                    <?php
                     echo $_SESSION['success'];
                     unset($_SESSION['success']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <!--popup-->
        <?php if (isset($_SESSION['username'])) :?>
            <p>Welcome ,<b><?php echo $_SESSION['username'];?></b></p>
        <?php endif ?>
        <!--end popup-->
        <h1>Database - Admin</h1>

        <div class="table-container">
            <table id="admin-db" class="active">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Create_at</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['create_at']; ?></td>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>
<!-- js scripts -->
    <script src="js/script.js"></script>
</body>
</html>