<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try{
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'signup_model.inc.php';

         //ERROR HANDLERS
         $errors = [];

         if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Fill in all field!";
         }
       
         $result = get_user($pdo, $username);

         if (is_username_wrong($result)) {
            $errors["Login_incorrect"] = "Wrong login Info!";
        }
        if (!is_username_wrong($result)
         && is_password_wrong($pwd, $result["pwd"])) {
            $errors["Login_incorrect"] = "Incorrect login Info!";
        }

         require_once "config_session.inc.php";
 
         if ($errors) {
             $_SESSION["errors_login"] = $errors;

             header("Location: ../login.php");
             die();
         }

         $newSessionId = session_create_id();
         $sessionId = $newSessionId. " " .$result["id"];
         session_id($sessionId);

         $_SESSION["user_id"] = $result["id"];
         $_SESSION["user_username"] = htmlspecialchars($result["username"]);
         $_SESSION["user_email"] = htmlspecialchars($result["email"]);
         $_SESSION["user_locations"] = htmlspecialchars($result["locations"]);
         $_SESSION["user_skilss"] = htmlspecialchars($result["skilss"]);
         $_SESSION["user_hobbies"] = htmlspecialchars($result["hobbies"]);
         $_SESSION["user_profilepicture"] = htmlspecialchars($result["profilepicture"]);

         $_SESSION['last_regeneration'] = time();

         header("Location: ../home.php?login=success");
         $pdo = null;
         $statement = null;
         die();

    }   catch (PDOException $e) {
        die("Query Failed:" .$e->getMessage());
    }

} else{
    header("Location: ../login.php");
    die();
}