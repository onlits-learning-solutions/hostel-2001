<?php

namespace Hostel\Controller;

use Hostel\Model\Hosteller;

require '../Model/Hosteller.php';

class HostellerController
{
    public static function index()
    {
        return Hosteller::all();
    }

    public function details($id)
    {

    }

    public function create()
    {

    }

    public function update($id)
    {

    }

    public function delete($d)
    {

    }
}


$hc = new HostellerController();
$hc->index();