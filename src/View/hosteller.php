<?php

use Hostel\Model\Hosteller;

require '../Model/Hosteller.php';

$hostellers = Hosteller::all();

?>

<h1>Hosteller</h1>
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