 <div class="col-md-offset-2 col-md-8 content">
    <?php foreach($article as $key => $value){?>
    
        <div class="post-container">
            <div class="post-container-title"><span class="post-container-user-image" style="background-image: url('<?= $value['userImage']?>');"></span><span class="post-container-title-text"><?= $value['title']?></span><br><span class="post-container-username"> @<?= $value['username']?></span><span class="post-container-time"><?= $value['dateCreated']?></span></div>
            <div class="post-container-content"><span><?= $value['content']?></span>
            <div class="post-container-content"><img src="<?= $value['picture']?>"/></div></div>
        </div> 
    <?php }?>
</div>