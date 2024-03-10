<?php
     require_once 'includes/config_session.inc.php';
     require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php output_username() ?>-Notification</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="head-s">
    <form action="home.php" method="post" class="gb">
            <button>BACK</button>
        </form>
     <div class="log">
        <h2>Notifications</h2>
     </div>
</div>
    
</body>
</html>