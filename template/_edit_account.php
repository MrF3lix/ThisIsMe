 <div class="col-md-offset-2 col-md-8 content">
    <div class="profile">
        <form method="POST" action="?controller=account&action=save&id=<?= $data[0]['id']?>">
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
                    <input type="text" class="form-control" name="image" value="<?= $data[0]['image']?>">
                </div>
                <div class="form-group">
                    <label for="username">Description</label>
                    <textarea class="form-control" name="description"><?= $data[0]['description']?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Save</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </form>
    </div>
</div>