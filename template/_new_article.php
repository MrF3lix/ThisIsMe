 <div class="col-md-offset-2 col-md-8 content">
    <div class="article">
        <h2>New Post</h2>
        <form method="POST" action="?controller=account&action=create">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="text" class="form-control" name="picture">
            </div>
            <div class="form-group">
                <label for="username">Description</label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Post</button>
        </form>
    </div>
</div>