<?php


function output_username(){

    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_username"];
    } else {
        echo "You are not logged in";
    }

}

function output_email() {
    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_email"];
    } else {
        echo "You are not logged in";
    }
}
function output_locations(){
    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_locations"];
    } else {
        echo "You are not logged in";
    }
}
function output_skilss(){
    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_skilss"];
    } else {
        echo "You are not logged in";
    }
}
function output_hobbies(){
    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_hobbies"];
    } else {
        echo "You are not logged in";
    }
}

function output_profilepicture(){
    if (isset($_SESSION["user_id"])) {
        echo "" .$_SESSION["user_profilepicture"];
    } else {
        echo "You are not logged in";
    }
}


function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors =  $_SESSION["errors_login"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p>'.$error .'</p>';
        }

        unset($_SESSION["errors_login"]);
    }
    elseif (isset($_GET['login']) && $_GET['login'] === "success"){
         header("Location: ../home.php?login=success");
    }
}