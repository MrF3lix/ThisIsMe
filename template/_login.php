<?php 
    if(isset($data['status']) && $data['status'] == false){
        echo '<div class="panelFailed">'.$data['errorMsg'].'</div>';
    }
?>
 <div class="col-md-offset-2 col-md-8 content">
    <div class="col-md-6 col-md-offset-3" id="login">
    <h2>Login</h2>
        <form method="POST" action="?controller=login">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

