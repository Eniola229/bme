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
    <title>Bme-Search Page</title>
    <link rel="stylesheet" href="css/home.css">  
    <link rel="stylesheet" href="css/s.css">  
</head>
<body>
    <div class="head-s">
    <form action="home.php" method="post">
            <button>Back</button>
        </form>
    </div>
    <div class="search-page">
        <div class="username">
        <h2>Search Users, News, Aticule's, Comments and lot more</h2>
        <h3>
        <?php
        output_username()
        ?>
    </h3>
        </div>
    <form class="searchform" action="s.php" method="post">
        <input type="text" id="search" name="usersearch" placeholder="Search..."><br>
        <button>Search</button>
    </form>
    </div>
</body>
</html>