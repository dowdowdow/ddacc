<?php include('asset/server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flight System</title>
        <link href="asset/app.css" rel="stylesheet" type="text/css">
    </head> 
    <body>
        <header>
            
            <div class="row">
                
            <ul class="main-nav">    
                <li class="active"><a href=""> HOME </a></li>
                <li><a href="asset/about.html"> ABOUT </a></li>
                <li><a href="asset/contact.html"> CONTACT </a></li>
                <li><a href="asset/faq.html"> FAQ </a></li>
            </ul>    
            
            </div>
                
            <div class="hero">
            <h1>Be ready to fly!</h1>
                <div class="form">
                    <form method="post" action="index.php" class="login-form">
                        <input type="text" name="username" placeholder="Username"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <button type="submit" name="login">Login</button>
                        <button><a href="asset/register.php">Register</button>
                     
                    </form>
                </div>       
            </div>     
        </header>  
    </body>    
</html>
    
