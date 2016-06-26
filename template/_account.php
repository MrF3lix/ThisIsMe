 <div class="col-md-offset-2 col-md-8 content">
    <div class="profile">
        <a href="?controller=account&action=edit" class="pull-right"><span class="glyphicon glyphicon-cog"></span></a>
        <div class="profile-image" style="background-image: url(<?= $data[0]['image']?>)"><br></div>
        <div class="profile-user">
            <span class="profile-user-info username">@<?= $data[0]['username']?></span><br>
            <span class="profile-user-info"><?= $data[0]['name']?> </span></span>
            <span class="profile-user-info"><?= $data[0]['surname']?></span></span><br>
            <span class="profile-user-description"><?= $data[0]['description']?></span></span><br>
        </div>
    </div>
</div>