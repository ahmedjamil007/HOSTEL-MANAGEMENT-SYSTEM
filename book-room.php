
<?php
session_start();
include("changepass.php");
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for complain
?>





<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Baiust Hostel</title>
      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script>
function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'bedid='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>

      
   </head>


   <?php
        if(isset($_POST['submit'])){
            $regno=$_POST['regno'];
            $firstname= $_POST['firstname'];
            $level= $_POST['level'];
            $term= $_POST['term'];
            $Building_Name= $_POST['name'];
            $floor_no = $_POST['floor_no'];
            $room_no = $_POST['room_no'];
            $bed_no = $_POST['bed_no'];
            $bed_location = $_POST['bed_location'];
            $bed_rent = $_POST['bed_rent'];

            $contact = $_POST['contact'];
            
            $message = "$regno $firstname  would like to request an room.";
            $msg="$regno $firstname $level $term taken this room." ;
      
            $query = "INSERT INTO `room_request` (`id`,`regno`,`firstname` ,`level`,`term`,`Building_Name`,`floor_no`, `room_no`,`bed_no`,`bed_location`, `bed_rent`,`contact`, `message`,`msg`, `date`) VALUES (NULL,'$regno' ,'$firstname', '$level', '$term','$Building_Name','$floor_no', '$room_no','$bed_no','$bed_location','$bed_rent','$contact', '$message','$msg', CURRENT_TIMESTAMP)";

            if(performQuery($query)){
                echo "<script>alert('Your  request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }
    
    ?>
   <body>




      <div class="wrapper">
         <input  type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
          
         <?php include('includes/sidebar.php');?>
      
      </div><!--sidebar-->





      
  <div class="content">
             <img  style="margin-top: 300px;"src="images.png"class="center" />   



              <h1>Room Book</h1>




<div class="container" style="margin-right: 200px; margin-left: 274px;margin-top: 10px; ">


  
<form method="post">
<?php 
$aregno=$_SESSION['regno'];
  $ret="select * from accounts where regno=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('s',$aregno);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>


    <div class="row">
      <div class="col-25">
           <label for="fname"> Student Id</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="regno"value="<?php echo $row->regno;?>" readonly >
      </div>
  </div>
   <div class="row">
      <div class="col-25">
           <label for="fname"> Name</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="firstname"value="<?php echo $row->firstname;?>" readonly >
      </div>
       <div class="row">
      <div class="col-25">
           <label for="fname"> Level</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="level"value="<?php echo $row->level;?>" readonly >
      </div>
       <div class="row">
      <div class="col-25">
           <label for="fname"> Term</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="term"value="<?php echo $row->term;?>" readonly >
      </div>
  </div>
  </div>
  </div>


 <?php } ?>

  <div class="row">
    
    <div class="col-25">
      <label for="country">Pick a Building</label>
    </div>
    
    <div class="col-75">
      <select name="name" >
        <option value="">Select Building</option>
      <?php
                //connection
                $conn = new mysqli('localhost', 'root', '', 'hostel');

                $sql = "SELECT * FROM building_add";
                $query = $conn->query($sql);

              
              ?>
      
        
   <?php
  
  while($row = $query->fetch_assoc()){
                  echo "
                    <option>".$row['Building_Name']."</option>
                  ";
                }
                ?>
      </select>

<?php  ?>

    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="lname">Floor Number</label>
    </div>
    <div class="col-75">
      <select  name="floor_no">
        <option >Select Floor</option>
        <option >1</option>
        <option >2</option>
        <option >3</option>
        <option >4</option>
        <option >5</option>
       
      </select>



     
    </div>
    
  </div>

 <div class="row">
    <div class="col-25">
      <label for="lname">Room no</label>
    </div>
    <div class="col-75">
     <select  name="room_no">
        <option >Select room</option>
        <option >1A</option>
        <option >1B</option>
        <option >1C</option>
        <option >1D</option>
        <option >2A</option>
        <option >2B</option>
        <option >2C</option>
        <option >2D</option>
        <option >3A</option>
        <option >3B</option>
        <option >3C</option>
        <option >3D</option>
        <option >4A</option>
        <option >4B</option>
        <option >4C</option>
        <option >4D</option>
        <option >5A</option>
        <option >5B</option>
        <option >5C</option>
        <option >5D</option>
      </select>
    </div>
    
  </div>






        <div class="row">
    <div class="col-25">
      <label for="lname">Bed-no</label>
    </div>
    <div class="col-75">
      <select name="bed_no" id="bed"class="form-control"  onChange="getSeater(this.value);" onBlur="checkAvailability()" required> 
<option value="">Select beds</option>
<?php $query ="SELECT * FROM room_add";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->bed_no;?>"> <?php echo $row->bed_no;?></option>
<?php } ?>
</select> 

  <span id="bed-availability-status" style="font-size:20px;"></span>
    </div>
    
  </div>

 <div class="row">
    <div class="col-25">
      <label for="lname">Bed Location</label>
    </div>
    <div class="col-75">
      <input class="o" type="text" id="seater" name="bed_location" placeholder="Bed Location.." required readonly>
    </div>
    
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Bed rent</label>
    </div>
    <div class="col-75">
      <input class="o" type="text"  id="fpm" name="bed_rent" placeholder="Bed rent.."readonly required>
    </div>
    
  </div>
  <div class="row">
      <div class="col-25">
           <label for="fname"> Contact:</label>
      </div>
      <div class="col-75">
           <input class="o" type="text" id="fname" name="contact"placeholder="Enter contact number.." >
      </div>
  </div>


  <br>
        <div class="row">
          <input class="o" type="submit" name="submit" Value="Submit" class="btn btn-primary">
       </div>



  </form>


</div>
<div>

                 
        <p> "Baiust Hostel Management"</p>      
      </div>
      <script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'bed_no='+$("#bed").val(),
type: "POST",
success:function(data){
$("#bed-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
   </body>
</html>