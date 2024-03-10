<?php

declare(strict_types=1);

function signup_input() {
       
        if (isset($_SESSION["signup_data"]["username"]) && 
        !isset($_SESSION["errors_signup"]["username_taken"])) {
            echo ' <input type="text" name="username"
             placeholder="Username" value="' . $_SESSION["signup_data"]["username"].'">';
        } else {
            echo '<input type="text" name="username" placeholder="Username">';
        }
        echo '<input type="file" name="profilepicture" id="profilepicture">';
        echo '<input type="text" name="locations" placeholder="Location">';
        echo  '<input type="text" name="skilss" placeholder="Skills">';
        echo '<input type="text" name="hobbies" placeholder="Your Bio/Hobbies">';
        echo ' <input type="password" name="pwd" placeholder="Password">';


        if (isset($_SESSION["signup_data"]["email"]) && 
        !isset($_SESSION["errors_signup"]["email_used"]) && 
        !isset($_SESSION["errors_signup"]["invalid_email"])) {
            echo ' <input type="text" name="email" placeholder="E-mail" value="' . $_SESSION["signup_data"]["email"].'">';
        } else {
            echo '<input type="text" name="email" placeholder="E-mail">';
        }
}

function check_signup_error() {
    if (isset( $_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>'.$error.'</p>';  
        }

        unset($_SESSION["errors_signup"]);
    } elseif (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<br>";
        echo '<p>Account succesfully created, please kindly enter you login details</p>';
    }
}