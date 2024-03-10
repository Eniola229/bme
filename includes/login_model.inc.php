<?php


function get_user(object $pdo, string $username) 
{
    $query = "SELECT * FROM userss WHERE
     username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}


  