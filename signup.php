<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bme-Signup</title>
    <link rel="stylesheet" href="css/ls.css">
</head>
<body>
    <div class="logo">
        <h1>B<span>me</span></h1>
    </div>
    <div class="main">
        
        <form action="includes/signup.inc.php" method="post" class="spage">
         <h3>Signup</h3>
         <?php
            signup_input();
         ?>
            <p>
        <?php
            check_signup_error();
         ?> 
            </p>
        <button>Signup</button>
        <h4><a href="login.php">Login</a></h4>
         </form>
        <p>By signing in you accept our <span>tearms and conditions</span></p>
       
    </div>
</body>
</html>