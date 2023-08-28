<?php

namespace Hostel\Model;

use Hostel\Model\Model;

class User
{
    private $user_id;
    private $password;

    public static function all()
    {
        return Model::all('user');
    }

    public static function find($id)
    {
        return Model::find($id, 'user');
    }
}