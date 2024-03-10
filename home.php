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
    <title>Bme-Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="logo">
        <h1>B<span>me</span></h1>
    </div>
    <div class="username">
    <h3>
        <h2>WELCOME</h2>
        <?php
        output_username()
        ?>
    </h3>
    </div>
    <div class="s" >
        <form action="search.php" method="post">
            <button>Search here...</button>
        </form>
    </div>
    <div class="notification">
        <form action="notification.php" method="post">
            <button>N</button>
        </form>
    </div>
    <div class="profile">
      <form action="profile.php" method="post">
        <button>Profile</button>
      </form>
    </div>
</div>
    <div class="main">
 <div class="sections">
    <form action="home.php" method="post">
        <button>All</button>
    </form>
    <form action="" method="post">
        <button>NEWS</button>
    </form>
    <form action="" method="post">
        <button>ENTERTAINMENT NEWS</button>
    </form>
    <form action="" method="post">
        <button>TECH</button>
    </form>
    <form action="" method="post">
        <button>BUSSINESS</button>
    </form>
    <form action="" method="post">
        <button>SPORTS</button>
    </form>
    <form action="" method="post">
        <button>WORLD</button>
    </form>
    <form action="" method="post">
        <button>FASHION</button>
    </form>
    <form action="" method="post">
        <button>POLITICS</button>
    </form>
    <form action="" method="post">
        <button>AGRICUTURE</button>
    </form>
 </div>
    <div class="page-all">
        <div class="trending">
            <div class="top-t">
                <h1>Trending</h1>
            </div>
        </div>
        <div class="all-news">
            <div class="local">
                <div class="top">
                   <form action="" method="post">
                        <button class="news">All</button>
                   </form>
                   <form action="" method="post">
                        <button>Updates</button>
                   </form>
                </div>
                <!---post--->
                <div class="status">
                    <div class="headstatus">
                        <h4>Short Express</h4>
                    </div>
                    <div class="userstatus">
                        <div class="card-img">
                        <img src="images/pst oyedepo jnr.jpg" alt="" srcset="">
                        </div>
                        <div class="textstatus">
                            <form action="" method="post">
                                <button>+</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="post">
                        <form action="" method="post">
                            <button class="express">Express Your Mind</button>
                            <button>Express</button>
                        </form>
                        <div class="otherpost">
                            <button class="img">IMG</button>
                            <button class="air">Air</button>
                            <button clas="locc">Loc</button>
                        </div>
                    </div>
                    <!-----post goes here------>
                    <div class="greeting">
                        <div class="card">
                            <div class="text">
                            <h1>Welcome</h1>
                            <h2>Bme</h2>
                            <h4>Updating the world...</h4>
                        </div>
                    </div>
                        <div class="send">
                            <h4>Do you have questions about <span>Bme?</span></h4>
                            <form action="" method="post">
                                <button>message us</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

        <div class="pages">
             <div class="top-p">
                <h1>Pages</h1>
            </div>
             <!---pages here--->
        </div>
    </div>


    </div>

</body>
</html>
