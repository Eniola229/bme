<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    $profilepicture = $_POST["profilepicture"];
    $locations = $_POST["locations"];
    $skilss = $_POST["skilss"];
    $hobbies = $_POST["hobbies"];

    try{
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        //ERROR HANDLERS
        $errors = [];

        if (is_input_empty($username, $pwd, $email, $profilepicture, $locations, $skilss, $hobbies)) {
            $errors["empty_input"] = "Fill in all field!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already resgistered!";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email,
                "profilepicture" => $profilepicture,
                "locations" => $locations,
                 "skilss" => $skilss,
                 "hobbies" => $hobbies
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../signup.php");
            die();
        }

        create_user($pdo, $pwd, $username, $email, $profilepicture, $locations, $skilss, $hobbies);
        header("Location: ../login.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();
    }
        catch (PDOException $e) {
        die("Query Failed:" .$e->getMessage());
    }
} else{
    header("Location: ../signup.php");
    die();
}

