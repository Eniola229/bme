<?php
     require_once 'includes/config_session.inc.php';
     require_once 'includes/signup_view.inc.php';
     require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bme-Login</title>
    <link rel="stylesheet" href="css/ls.css">
</head>
<body>
    <div class="logo">
        <h1>B<span>me</span></h1>
    </div>
    <div class="main">
        <div class="login-message">
        <h3>
        <?php
        output_username()
        ?>
         <?php
            check_signup_error();
         ?> 
            </p>
        </h3>
        </div>
        <?php
        if (!isset($_SESSION["user_id"])) {?>
         
       <form action="includes/login.inc.php" method="post"><br>
       <h3>Login</h3>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
         <p><?php
            check_login_errors();
            ?>
          </p>
            <button>Login</button>
             <h4><a href="signup.php">Signup</a></h4>
        </form>
    <?php } ?>
    <p>By signing in you accept our <span>tearms and conditions</span></p>
    </div>
  
</body>
</html>