<?php

namespace Hostel\Controller;

require '../env.php';

class UserController
{
    public static function authenticate(array $credentials): bool
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $user_id = $credentials['user_id'];
        $password = $credentials['password'];
        $sql = "SELECT password from user WHERE user_id='$user_id' AND password=SHA1('$password')";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

// $credentials = array("user_id" => "root", "password" => "root");
// if (UserController::authenticate($credentials))
//     echo "Authenticated";
// else
//     echo "Not Authenticated";
