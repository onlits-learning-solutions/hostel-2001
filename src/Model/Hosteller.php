<?php

namespace Hostel\Model;

use Hostel\Model\Model;

class Hosteller
{
    public int $id;
    public string $name;
    public string $gender;
    public string $date_of_birth;
    public string $contact_no;
    public string $email;

    public static function all(): array|null
    {
        return Model::all('hosteller');
    }

    public static function find($id): Hosteller|null
    {
        return Model::find($id, 'hosteller');
    }

    public function save(): void
    {
        $connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "INSERT INTO hosteller(name, gender, date_of_birth, contact_no, email) VALUES('$this->name','$this->gender','$this->date_of_birth','$this->contact_no','$this->email')";
        $connection->query($sql);
    }

    public function update(): void
    {
        
    }

    public static function countAll(): int
    {
        return Model::countAll('hosteller');
    }
}
