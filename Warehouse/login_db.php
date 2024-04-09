<!-- for backend database log in -user -->
<?php
    session_start();
    include('db_connect.php');    

    $errors = array();

    if (isset($_POST['signin-submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password ='$password' ";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Log in successfully !";
                header("location: home.php");
            }
            else {
                array_push($errors, "Pls try again!");
                $_SESSION['errors'] = "Pls try again!";
                header("location: login.php");
            }
        }
    }
?>
<!-- admin_a -> admin101 -->
<!-- admin_b -> admin202 -->