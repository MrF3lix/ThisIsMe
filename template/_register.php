<?php 
    if(isset($error)){
        echo '<div class="panelFailed">'.$error.'</div>';
    }
?>
<div class="col-md-offset-2 col-md-8 content">
    <div class="col-md-6 col-md-offset-3" id="login">
    <h2>Register</h2>
        <form method="POST" action="?controller=register&action=register">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="surname" placeholder="Surname">
                </div>
            </div>            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="E-Mail">
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" name="password-repeat" placeholder="Repeate Password">
                </div>
            </div>            
            <button type="submit" class="btn btn-default">Register</button>
        </form>
    </div>
</div>

