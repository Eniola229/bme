<?php
     require_once 'includes/config_session.inc.php';
     require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bme-Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<div class="head-s">
    <form action="home.php" method="post" class="gb">
            <button>BACK TO HOME</button>
        </form>
     <div class="log">
        <h2>Profile</h2>
     </div>
     <form action="includes/logout.inc.php" class="logout" method="post">
          <button class="logout">Logout</button>
     </form>

</div>
   <div class="mainp">

    <div class="info">
        <div class="topu">
            <h2>User Information</h2>
        </div>
        <h3>Name: 
        <?php
        output_username()
        ?></h3>
        <h3>Email:
        <?php
        output_email()
        ?>
        </h3>
        <h3>Skills:
        <?php
        output_skilss()
        ?>
        </h3>
        <h3>Hobbies/Bio:
        <?php
        output_hobbies()
        ?>
        </h3>
        <h3>Location:
        <?php
        output_locations()
        ?>
        </h3>
     
         <div class="addpimg">
                <button type="submit" class="btn" onclick="openPopup()">+Edit public details</button>
         </div>
   
    </div>
    <div class="following">
        <div class="p-img">
            <div class="big-img">
                <img src=" <?php output_profilepicture() ?>" alt="" sizes="" srcset=""> 
            </div>
            <div class="small-img">
              <form action="" method="post">
           <button><img src="images/pst oyedepo jnr.jpg" alt="" srcset=""></button>   
              </form>
            </div>
            <h3>  <?php output_hobbies() ?>
            
        </div>
       
       
       
     
       
    </div>
    
   </div>
   <div class="addpcontainer">
		<div class="popup" id="popup">
            <h2>Edit public details</h2>
                <div class="update">
                <form action="includes/otherinfo.inc.php" method="post">
                <h3>Name: 
                    <?php
                    output_username()
                    ?></h3>
                    <input type="text" placeholder="User Name">
                    <input type="file" name="profilepicture" id="profilepicture">  
                    <h3>Email:
                    <?php
                    output_email()
                    ?>
                    </h3>
                    <input type="text" placeholder="E-Mail">
                    <h3>Skills:
                    <?php
                    output_skilss()
                    ?>
                    </h3>
                    <input type="text" placeholder="Skills">
                    <h3>Hobbies/Bio:
                    <?php
                    output_hobbies()
                    ?>
                    </h3>
                    <input type="text" placeholder="Hobbies">
                    <h3>Location:
                    <?php
                    output_locations()
                    ?>
                    </h3> 
                    <input type="text" placeholder="Locations">       
                    <button>Update</button>
                </form>
    </div>
			<button type="button" onclick="closePopup()">Close</button>
		</div>
	</div>
    <script src="jsfolder/profile.js"></script>
</body>
</html>