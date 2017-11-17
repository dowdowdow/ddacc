<?php 
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'flight');

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully";


    if (!empty($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if (mysqli_query($db, $sql)){

            echo "New record created successfully";
        } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }

        
    }

    //login
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) == 1) {
            //log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: checkin.php'); //redirect to checkin
        
        }

    }


    //logout
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
      
    }

    if (isset($_POST['book'])){
        
        $username = $_SESSION['username'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $date = $_POST['date'];
        $guest = $_POST['guest'];

        $sql = "INSERT INTO book (username, origin, destination, date, guest) VALUES ('$username', '$origin', '$destination', '$date', '$guest')";
        
        
        if (mysqli_query($db, $sql)){

            echo "New record created successfully";
            header('location: booked.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }

        
    }

?>