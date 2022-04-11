<?php
    session_start(); //we need session for the log in thingy XD 
    include("changepass.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Baiust Hostel</title>

   <link rel="stylesheet" type="text/css" href="signup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
    <?php
        if(isset($_POST['signup'])){
            $regno=$_POST['regno'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contact = $_POST['contact'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $level = $_POST['level'];
            $term = $_POST['term'];

            $dept = $_POST['dept'];
            $gname = $_POST['gname'];
            $grelation = $_POST['grelation'];
            $gcontact = $_POST['gcontact'];
            $address = $_POST['address'];
             $religion = $_POST['religion'];

              $password = $_POST['password'];
            $message = "$lastname $firstname would like to request an account.";
      
            $query = "INSERT INTO `requests` (`id`,`regno` ,`firstname`, `lastname`,`contact`,`gender`, `email`,`level`,`term`,`dept`,`gname`,`grelation`,`gcontact`,`address`,`religion`,`password`, `message`, `date`) VALUES (NULL,'$regno' ,'$firstname', '$lastname', '$contact','$gender','$email', '$level','$term','$dept','$gname','$grelation','$gcontact','$address','$religion','$password', '$message', CURRENT_TIMESTAMP)";

            if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }
    
    ?>
  <body class="text-center" style="background-color: #cfebfd;">
      <div class="container">
            <form method="post" class="form-signin">
              <img  src="images.png" >
              <h1 > User Registration</h1> <br>
              <label for="inputEmail" class="sr-only" s>ID</label>
              <input name="regno" type="text" id="inputEmail" class="form-control" placeholder="Your id" required autofocus>
              <label for="inputEmail" class="sr-only">Firstname</label>
              <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
                <label  for="inputEmail" class="sr-only">Lastname</label>
              <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
                <label for="inputEmail" class="sr-only">Email address</label>
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputEmail" class="sr-only">Contact</label>
              <input name="contact" type="text" id="inputEmail" class="form-control" placeholder="Contact" required autofocus>
              <label for="inputEmail" class="sr-only">Gender</label>
              <input name="gender" type="text" id="inputEmail" class="form-control" placeholder="Gender" required autofocus>
                 <label for="inputEmail" class="sr-only">Level</label>
              <input name="level" type="text" id="inputEmail" class="form-control" placeholder="Level" required autofocus>
                 <label for="inputEmail" class="sr-only">Term</label>
              <input name="term" type="text" id="inputEmail" class="form-control" placeholder="Term" required autofocus>






                 <label for="inputEmail" class="sr-only">Department</label>
              <input name="dept" type="text" id="inputEmail" class="form-control" placeholder="Department" required autofocus>

             
              <label for="inputEmail" class="sr-only">Guardian Name</label>
              <input name="gname" type="text" id="inputEmail" class="form-control" placeholder="Guardian Name" required autofocus>
            
              <label for="inputEmail" class="sr-only">Guardian Relation</label>
              <input name="grelation" type="text" id="inputEmail" class="form-control" placeholder="Guardian Relation" required autofocus>
               <label for="inputEmail" class="sr-only">Guardian Contact</label>
              <input name="gcontact" type="text" id="inputEmail" class="form-control" placeholder="Guardian Contact" required autofocus>
               
               <label for="inputEmail" class="sr-only">Address</label>
              <input name="address" type="text" id="inputEmail" class="form-control" placeholder="Address" required autofocus>
<label for="inputEmail" class="sr-only">Religion</label>
              <input name="religion" type="text" id="inputEmail" class="form-control" placeholder="religion" required autofocus>

              <label for="inputPassword" class="sr-only">Password</label>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>


              <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
              <a href="index.php" class="mt-5 mb-3 text-muted">Go back to login page</a>
            </form>
            <br>
            <br>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
