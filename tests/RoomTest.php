<?php

namespace Hostel\TestCase;

use PHPUnit\Framework\TestCase;
use Hostel\Model\Room;

use function PHPUnit\Framework\assertEquals;

class RoomTest extends TestCase
{
    public function testCount()
    {
        assertEquals(1, Room::countAll());
    }

    public function testAll()
    {
        $rooms = array (
            array("room_no"=>"101", "room_type"=>"Single-AC")
        );

        assertEquals($rooms, Room::all());
    }
}