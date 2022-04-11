<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'hostel') or die ('Unable to connect');

?>
<?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

    $select = mysqli_query($conn," SELECT * FROM admin_table WHERE Username = '$Username' AND Pass = '$Pass' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["Username"])){
        header("Location:dash.php");
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>admin</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>

  <body class="text-center">
         
      <div class="container">
            <form method="post" class="form-signin">
              <img class="mb-4" src="images.png" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>
                
                
              <label for="inputEmail" class="sr-only">Email address</label>
              <input name="Username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> <br>
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="Pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
             
              <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
              
            </form>
        
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
