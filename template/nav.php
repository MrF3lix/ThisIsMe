<div id="Header" class="col-xs-12">
    <div class="navigation col-md-offset-2 col-md-8">
        <div class="navigation-title">
            <span>thisisme</span>
        </div>
        <ul class="navigation-list">
            <li><a href="/thisisme/">Home</a></li>
            
            <?php if(isset($_SESSION['token'])){ ?>
                <?php if($_SESSION['access'] == 1){ ?>
                    <li><a href="/thisisme/?controller=settings">Settings</a></li> 
                <?php } ?>
                <li><a href="/thisisme/?controller=account"><?=$_SESSION['username']?></a></li>   
                <li><a href="/thisisme/?controller=login&action=logout">Logout</a></li>            
            <?php } ?>
            
            
            <?php if(!isset($_SESSION['token'])){ ?>
                <li><a href="/thisisme/?controller=login">Login</a></li>    
                <li><a href="/thisisme/?controller=register">Register</a></li>    
            <?php } ?>
        </ul>
    </div>    
</div>