<?php
    session_start();
    include ('db_connect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTOMATIC WAREHOUSE</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--style css-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="bg-space1">
        <div class="box-signin">
            <a href="index.php" style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
              </svg></a>
            <div>
                <form action="login_db.php" method="post">   
                    <h2>sign in</h2>
                        <?php if (isset($_SESSION['errors'])) : ?>
                            <div class="errors">
                                <p>                                    
                                    <?php
                                    echo $_SESSION['errors'];
                                    unset($_SESSION['errors']);
                                    ?>
                                </p>
                            </div>
                        <?php endif ?>
                        <div> 
                    <div class="form-container">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" placeholder="username.." required>
                        </div>
                        <div>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" placeholder="password.." required>
                        </div>
                        
                    </div>

                    <div class="btn1">
                        <button type="submit" name="signin-submit"class="btn">Sign In</button>
                    </div>                          
                </form>                
                    
            </div>
        </div>
    </div>
</body>
</html>