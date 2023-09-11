<?php
require '../vendor/autoload.php';

use Hostel\Controller\HostellerController;
use Hostel\Controller\Request;

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/')
    header("Location:/View/login.php");
elseif ($uri === '/dashboard')
    header("Location:/View/layout.php?page=dashboard");
elseif ($uri == '/hosteller')
    header("Location:/View/layout.php?page=hosteller");
elseif ($uri == '/transaction')
    header("Location:/View/layout.php?page=transaction");
elseif ($uri === '/hosteller/create') {
    $request = new Request($_POST);
    HostellerController::create($request);
} else
    echo "Sorry! page not found.";
