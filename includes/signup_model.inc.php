<?php

declare(strict_types=1);


function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM userss WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function get_email(object $pdo, string $email) 
{
    $query = "SELECT username FROM userss WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}
function get_locations(object $pdo, string $locations) 
{
    $query = "SELECT loations FROM userss WHERE locations = :locations;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":locations", $locations);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}
function set_user(object $pdo, string $pwd, string $username, string $email,
 string $profilepicture, string $locations, string $skilss, string $hobbies) 
{
    $query = "INSERT INTO userss (username, pwd, email, profilepicture, locations, skilss, hobbies) 
    VALUES (:username, :pwd, :email, :profilepicture, :locations, :skilss, :hobbies)";
    $stmt = $pdo->prepare($query);

    $options = [
        "cost" => 12
    ];

    $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedpwd);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":profilepicture", $profilepicture);
    $stmt->bindParam(":locations", $locations);
    $stmt->bindParam(":skilss", $skilss);
    $stmt->bindParam(":hobbies", $hobbies);
    $stmt->execute();
}

