<?php

namespace Hostel\Model;

use Hostel\Environment;

class Model
{
    public static function all(string $table): array
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        // $connection = new \mysqli(Environment::SERVER, Environment::USERNAME, Environment::PASSWORD, Environment::DATABASE);
        $sql = "SELECT * FROM $table";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function find($id, string $table): array
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        // $connection = new \mysqli(Environment::SERVER, Environment::USERNAME, Environment::PASSWORD, Environment::DATABASE);
        $sql = "SELECT * FROM $table WHERE id='$id'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    public static function create(string $table): void
    {

    }

    public static function update(string $table): void
    {

    }

    public static function delete($id, string $table): void
    {

    }
}