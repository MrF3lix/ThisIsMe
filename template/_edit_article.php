 <div class="col-md-offset-2 col-md-8 content">
    <div class="article">
        <h2>Edit Post</h2>
        <form method="POST" action="?controller=article&action=save" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?= $article[0]['id']?>">
                <input type="hidden" class="form-control" name="dateCreated" value="<?= $article[0]['dateCreated']?>">
                <input type="hidden" class="form-control" name="userId" value="<?= $article[0]['userId']?>">
                <input type="hidden" class="form-control" name="dateCreated" value="<?= $article[0]['dateCreated']?>">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $article[0]['title']?>">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="hidden" class="form-control" name="picture" value="<?= $article[0]['picture']?>">
                <input type="file" name="pictureUpload" id="pictureUpload">
            </div>
            <div class="form-group">
                <label for="username">Description</label>
                <textarea class="form-control" name="content"><?= $article[0]['content']?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Save</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#askToDelete">Delete</button>
        </form>        
    </div>
    
    <?php if($article[0]['picture'] != ''){ ?>
    <h3>Current Picture</h3>
        <div class="post-container-content"><img src="<?= $article[0]['picture']?>"/></div>
    <?php } ?>
    <div class="modal fade" id="askToDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="?controller=article&action=delete&id=<?= $article[0]['id']?>">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete</h4>
                    </div>
                    <div class="modal-body">
                        Do you really want to delete this article?
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