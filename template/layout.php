<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">

        <title>THISISME</title>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100,700' rel='stylesheet' type='text/css'>
        <link href="./public/css/normalize.min.css" rel="stylesheet">
        <link href="./public/css/bootstrap.css" rel="stylesheet">
        <link href="./public/css/style.css" rel="stylesheet">

    </head>
    <body>
        <div id="wrapper">
            <div id="Header" class="col-xs-12">
                <div class="navigation col-md-offset-2 col-md-8">
                    <div class="navigation-title">
                        <span>thisisme</span>
                    </div>
                    <ul class="navigation-list">
                        <li id="showLogin">Login</li>
                    </ul>
                </div>
                <div class="col-xs-4 arrow-box hidden" id="login">
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>   
            <div id="content" class="col-md-offset-2 col-md-8">
                <div id="center" class="col-md-8">
                    <div class="post-container">
                        <div class="post-container-title"><span class="post-container-user-image"></span><span class="post-container-title-text">Lorem Ipsum</span><br><span class="post-container-username"> @felixsaaro</span><span class="post-container-time">24.06.2016</span></div>
                        <div class="post-container-content"><span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<br><br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</span></div>
                    </div>                    
                    <div class="post-container">
                        <div class="post-container-title"><span class="post-container-user-image"></span><span class="post-container-title-text">Lorem Ipsum</span><br><span class="post-container-username"> @felixsaaro</span><span class="post-container-time">24.06.2016</span></div>
                        <div class="post-container-content"><img src="./public/img/1/IMG_3026.jpg"/></div>
                    </div>
                </div>
                <div id="right"  class="col-md-4">
                    <div id="user">
                        <div class="user-image"></div>
                        <div class="user-name">Felix Saaro</div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="col-md-offset-2 col-md-8">
                    <span>© Copyright by Felix Saaro</span> 
                </div>           
            </div>   
        </div> 
    </body>
</html>