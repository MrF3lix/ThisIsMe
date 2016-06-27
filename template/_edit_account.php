 <div class="col-md-offset-2 col-md-8 content">
    <div class="profile">
        <form method="POST" action="?controller=account&action=save&id=<?= $data[0]['id']?>" enctype="multipart/form-data">
            <div class="profile-image" style="background-image: url(<?= $data[0]['image']?>)"><br></div>
           <div class="profile-user"> 
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?= $data[0]['id']?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $data[0]['username']?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data[0]['name']?>">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" value="<?= $data[0]['surname']?>">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" class="form-control" name="email" value="<?= $data[0]['email']?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $data[0]['password']?>">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="hidden" class="form-control" name="image" value="<?= $data[0]['image']?>">
                    <input type="file" name="pictureUpload" id="pictureUpload">
                </div>
                <div class="form-group">
                    <label for="username">Description</label>
                    <textarea class="form-control" name="description"><?= $data[0]['description']?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#askToDelete">Delete</button>
            </div>
        </form>
    </div>

    <div class="modal fade" id="askToDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="?controller=account&action=delete&id=<?= $data[0]['id']?>">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete</h4>
                    </div>
                    <div class="modal-body">
                        Do you really want to delete this account?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>