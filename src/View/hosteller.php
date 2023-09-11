<?php

use Hostel\Controller\HostellerController;

$hostellers = HostellerController::index();

?>
<div class="row">
    <div class="col">
        <h1>Hosteller</h1>
    </div>
    <div class="col">
        <a href="layout.php?page=new_hosteller" class="btn btn-primary float-end">New Hosteller</a>
    </div>
</div>
<br> <br> <br>
<div>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <input type="text" name="filter_id" id="filter_id" class="form-control" placeholder="Id">
            </div>
            <div class="col">
                <input type="text" name="filter_id" id="filter_id" class="form-control" placeholder="Name">
            </div>
        </div>
    </form>
</div>

<br> <br>

<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($hostellers as $hosteller) { ?>
            <tr>
                <td><?= $hosteller['id']; ?></td>
                <td><?= $hosteller['name']; ?></td>
                <td><?= $hosteller['gender']; ?></td>
                <td><?= $hosteller['date_of_birth']; ?></td>
                <td><?= $hosteller['contact_no']; ?></td>
                <td><?= $hosteller['email']; ?></td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        <?php } ?>
    </table>
</div>