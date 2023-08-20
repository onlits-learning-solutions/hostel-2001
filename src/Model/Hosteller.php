<?php

namespace Hostel\Model;

require 'Model.php';

class Hosteller
{
    private $id;
    private $name;
    private $gender;
    private $date_of_birth;
    private $contact_no;
    private $email;

    public static function all()
    {
        return Model::all('hosteller');
    }

    public static function find($id)
    {
        return Model::find($id, 'hosteller');
    }

    public function save()
    {

    }
}


print_r(Hosteller::all());
echo "\n";
print_r(Hosteller::find(2));
echo "\n";