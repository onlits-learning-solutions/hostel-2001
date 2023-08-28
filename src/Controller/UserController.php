<?php

namespace Hostel\Controller;

use Hostel\Environment;

class UserController
{
    public static function authenticate(array $credentials): bool
    {
        $connection = new \mysqli(Environment::SERVER, Environment::USERNAME, Environment::PASSWORD, Environment::DATABASE);
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