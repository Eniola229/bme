<?php

declare(strict_types=1);


function is_input_empty(string $username, string  $pwd, string $email, string $profilepicture, string $locations, string $skilss, string $hobbies) 
{
    if (empty($username) || empty($pwd) || empty($email) || empty($profilepicture) || empty($locations) || empty($skilss) || empty($hobbies))  {
        return true;
    } else{
        return false;
    }
}

function is_email_invalid(string $email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
        return true;
    } else{
        return false;
    }
}

function is_username_taken(object $pdo, string $username) 
{
    if (get_username($pdo, $username))  {
        return true;
    } else{
        return false;
    }
}

function is_email_registered(object $pdo, string $email) 
{
    if (get_email($pdo, $email))  {
        return true;
    } else{
        return false;
    }
}

function create_user(object $pdo, string $pwd, string $username, string $email, string $profilepicture, string $locations, string $skilss, string $hobbies) 
{
    set_user($pdo, $pwd, $username, $email, $profilepicture, $locations, $skilss, $hobbies);
}

