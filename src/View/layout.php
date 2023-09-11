<?php
require '../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System - [Layout]</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #33A9FF;">
            <?php require 'topnav.php'; ?>
        </div>
        <div class="row">
            <aside class="col-2" style="background-color: lightgray;">
                <?php require 'sidenav.php'; ?>
            </aside>
            <main class="col">
                <div class="row" style="padding: 30px;">
                    <?php require $_GET['page'] . '.php' ?>
                </div>
                <footer class="row" style="background-color:#33A9FF; position:fixed; bottom:0; width:85%">
                    <?php require 'footer.php'; ?>
                </footer>
            </main>
        </div>
    </div>
</body>

</html>