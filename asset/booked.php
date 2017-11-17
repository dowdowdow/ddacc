<?php include('server.php'); 

    if (empty($_SESSION['username'])){
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flight System</title>
        <link href="app.css" rel="stylesheet" type="text/css">
    </head> 
    <body>
        <header>
            
            <div class="row">
            <div class="content">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class = "error success">
                        <h3>
                            <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </h3>
                    </div>
                <?php endif ?>

                <?php if(isset($_SESSION["username"])): ?>
                    <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p><a href="booked.php?logout='1'" style="color: red;">Logout</a></p>
                <?php endif ?>


            </div>
            <ul class="main-nav">    
                <li class="active"><a href=""> HOME </a></li>
                <li><a href="about.html"> ABOUT </a></li>
                <li><a href="contact.html"> CONTACT </a></li>
                <li><a href="faq.html"> FAQ </a></li>
            </ul>    
            
            </div>
                
            <div class="hero">
            <h1>Booked Successfully!</h1>
                <div class="form">
                    <form method="post" action="booked.php" class="login-form">

                        <button type="submit" name="login"><a href="checkin.php">Book Again</button>
                        <button><a href="booked.php?logout='1'">Logout</button>
                     
                    </form>
                </div>  
            </div>
        </header> 
    </body>    
</html>
    