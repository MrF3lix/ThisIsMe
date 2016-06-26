<?php


    //TODO list of Posts

?>
<div class="col-md-offset-2 col-md-8 content">
    <h2>User</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Image</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Access</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($user as $key => $value){?>

                <td><?= $value['id']?></td>
                <td><?= $value['username']?></td>
                <td><?= $value['image']?></td>
                <td><?= $value['name']?></td>
                <td><?= $value['surname']?></td>
                <td><?= $value['email']?></td>
                <td><?= $value['password']?></td>
                <td><?= $value['access']?></td>
                <td><?= substr($value['description'], 0, 20)?>...</td>
                <td class="action"><span class="delete-action">Delete</span></td>
            
            <?php }?>
        </tbody>
    </table>
</div>