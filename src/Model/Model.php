<?php

namespace Hostel\Model;

require '../env.php';

class Model
{
    public static function all($table)
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM $table";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function find($id, $table)
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM $table WHERE id='$id'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }
}