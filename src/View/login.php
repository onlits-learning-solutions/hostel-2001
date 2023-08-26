<?php

use Hostel\Controller\UserController;

require '../Controller/UserController.php';

$errormessage = null;

if($_GET['error'] == '99') {
    $errormessage = 'Invalid username or password! Please retry!';
}

if (isset($_POST['login'])) {
    if (UserController::authenticate($_POST)) {
        header('Location:layout.php?page=dashboard');
    } else {
        header('Location:login.php?error=99');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <main class="row" style="padding: 50px;">
        <div class="col">

        </div>
        <div class="col">
            <form action="" method="post">
                <label for="user_id" class="form-label">User Id</label>
                <input type="text" name="user_id" id="user_id" class="form-control" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required> <br>
                <button name="login" class="btn btn-primary">Login</button>
                <label for="" style="color: red; margin-left: 30px;"><?= $errormessage ?></label>
            </form>
        </div>
    </main>
</body>

</html>