<?php

namespace Hostel\Controller;

use Hostel\Model\Hosteller;

class HostellerController
{
    public static function index()
    {
        return Hosteller::all();
    }

    public function details($id)
    {
        // return view();
    }

    public static function create(Request $request): void
    {
        $hosteller = new Hosteller();
        $hosteller->name = $request->name;
        $hosteller->gender = $request->gender;
        $hosteller->date_of_birth = $request->date_of_birth;
        $hosteller->contact_no = $request->contact_no;
        $hosteller->email = $request->email;
        $hosteller->save();
        header('Location:/hosteller');
    }

    public function update($id)
    {
    }

    public function delete($d)
    {
    }
}
