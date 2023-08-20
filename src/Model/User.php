<?php

namespace Hostel\Model;

require 'Model.php';

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

print_r(User::all());
echo '\n';
print_r(User::find('root'));
echo '\n';