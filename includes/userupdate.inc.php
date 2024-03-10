<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $query = "UPDATE  users SET = username = :username, pwd = :pwd, email = :email WHERE id = 6;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        header("Location: ../login.php");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        header("Location: ../profile.php");
        $_SESSION["errors_login"] = $errors;
        die("Query failed:" .$e->getMessage());
    }
}
else {
    header("Location: ../profile.php");
}