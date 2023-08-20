<?php

namespace Hostel\Controller;

class Controller
{
    public function view(string $url): string
    {
        return "header('Location:" . $url . "')";
    }
}
