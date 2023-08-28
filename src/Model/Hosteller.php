<?php

namespace Hostel\Model;

use Hostel\Model\Model;

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