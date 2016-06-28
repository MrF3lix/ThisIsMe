<div id="Header" class="col-xs-12">
    <div class="navigation col-md-offset-2 col-md-8">
        <div class="navigation-title">
            <span><a href="?controller=index">thisisme</a></span>
        </div>
        <ul class="navigation-list">
            
            <?php if(isset($_SESSION['token'])){ ?>
                <?php if($_SESSION['access'] == 1){ ?>
                    <li><a href="?controller=settings">Settings</a></li> 
                <?php } ?>
                <li><a href="?controller=account"><?=$_SESSION['username']?></a></li>   
                <li><a href="?controller=login&action=logout">Logout</a></li>            
            <?php } ?>
            
            
            <?php if(!isset($_SESSION['token'])){ ?>
                <li><a href="?controller=login">Login</a></li>    
                <li><a href="?controller=register">Register</a></li>    
            <?php } ?>
        </ul>
    </div>    
</div>