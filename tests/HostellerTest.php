<?php

namespace Hostel\TestCase;

use Hostel\Model\Hosteller;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;

class HostellerTest extends TestCase
{
    public function testAll()
    {
        $hostellers = Hosteller::all();
    }
}