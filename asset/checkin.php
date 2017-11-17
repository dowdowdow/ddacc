<?php include('server.php'); 

    if (empty($_SESSION['username'])){
        header('location: index.php');
    }

    $db = mysqli_connect('localhost', 'root', '', 'flight');
    $query = "SELECT * FROM 'destination'";
    $result1 = mysqli_query($db,$query);
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
                    <p><a href="checkin.php?logout='1'" style="color: red;">Logout</a></p>
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
            <h1>Be ready to fly!</h1>
                <div class="form">
                    <form method="post" action="checkin.php" class="login-form">
                        <p>Origin</p>
                        <br>
                        <select name="origin"> 
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Thailand">Thailand</option>
                            <option value="China">China</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Singapore">Singapore</option>
                        </select>
                        <br><br>
                        <p>Destination</p>
                        <br>
                        <select name="destination"> 
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Thailand">Thailand</option>
                            <option value="China">China</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Singapore">Singapore</option>
                        </select>

                        <br><br>
                        <input type="date" name="date" min="2017-11-20">
                        <input type="number" name="guest" min="1" max="10" placeholder="Number of Guests" >

                        <br><br><br>

                        <button type="submit" name="book" value="submit">Book</button>
                     
                    </form>
                </div>      
            </div>
        </header> 
    </body>    
</html>
    