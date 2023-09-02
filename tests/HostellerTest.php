<?php

namespace Hostel\TestCase;

use Hostel\Model\Hosteller;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class HostellerTest extends TestCase
{
    public function testCountAll()
    {
        assertEquals(2, Hosteller::countAll());
    }

    public function testAll()
    {
        $hostellers = array(
            array("id"=>"1", "name"=>"Raju Kumar", "gender"=>"M", "date_of_birth"=>"2001-12-25", "contact_no"=>"9845248754", "email"=>"rajukumar@onlits.com"),
            array("id"=>"2", "name"=>"Santosh Kumar", "gender"=>"M", "date_of_birth"=>"2001-01-15", "contact_no"=>"8956471256", "email"=>"santoshkumar@onlits.com")
        );
        
        assertEquals($hostellers, Hosteller::all());
    }
}