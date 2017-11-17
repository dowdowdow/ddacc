<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flight System</title>
        <link href="app.css" rel="stylesheet" type="text/css">
    </head> 
    <body>
        <header>
            
            <div class="row">
                
            <ul class="main-nav">    
                <li class="active"><a href=""> HOME </a></li>
                <li><a href=""> ABOUT </a></li>
                <li><a href=""> CONTACT </a></li>
                <li><a href=""> FAQ </a></li>
            </ul>    
            
            </div>
                
            <div class="hero">
            <h1>Register</h1>
                <div class="form">
                    <form method="post" action="register.php" class="register-form">
                        <input type="text" name="username" placeholder="Username"/>
                        <input type="password" name="password" placeholder="Password"/>
                        <button type="submit" name="submit" value="submit">Register</button>
                        
                     
                    </form>
                </div>
                         
            </div>
        </header>      
    </body>    
</html>
    

