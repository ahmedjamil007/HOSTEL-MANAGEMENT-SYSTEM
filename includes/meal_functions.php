<?php

// Class containing functions regarding database.
class Database{
    
    private $host_name;
    private $user_name;
    private $password;
    private $database_name;
    
    // Connection to database.
    public function connect(){
        
        $this->host_name = "localhost";
        $this->user_name = "root";
        $this->password = "";
        $this->database_name = "hostel";
        
        $connection = mysqli_connect($this->host_name, $this->user_name, $this->password, $this->database_name);
        
        if($connection == false){
            mysqli_connect_error();
            die("We have a problem! Check CRUD_dynamic.");
        }
        else{
            return $connection;
        }
        
    } // Connect function end.
    
    
    // insert in database.
    public function create($query){
        
        $con = $this->connect();
        $result = mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
               
    }
    
    // Read from database.
    public function read($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                /*while($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
                    return $data;
                }*/
                return $result;
            }
        
    }
    
    // update the database.
    public function update($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
        
    }
    
    // delete from database.
    public function delete($query){
        
        $con = $this->connect();
        //$data = false;
        $result =mysqli_query($con, $query);
            
            if(!$result){
                return false;
            }
            else{
                return true;
            }
        
    }
    
    
    
    
    
    
    
}














$db_con = new Database();
$con = $db_con->connect();

// Basic_info_data_store.
if(isset($_POST['meal_sub'])){
    
    // Getting data from form and storing in variables.
    $regno = mysqli_real_escape_string($con, $_POST['regno']);

    $personal = mysqli_real_escape_string($con, $_POST['price']);
    $guest_no = mysqli_real_escape_string($con, $_POST['guest_no']);   
    $guest = $guest_no*$personal;
    $meal_type = mysqli_real_escape_string($con, $_POST['meal_type']);
    $start_time = mysqli_real_escape_string($con, $_POST['start_time']);
    $end_time = mysqli_real_escape_string($con, $_POST['end_time']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $place = mysqli_real_escape_string($con, $_POST['place']);
    $type_submit = mysqli_real_escape_string($con, $_POST['type_submit']);

    date_default_timezone_set('Asia/Dhaka');
    $time = date("H:i:s");

    $query_to_check_meal_bill = "SELECT * FROM meal_bill WHERE sub_date = '$date' AND regno = '$regno' AND meal_type = '$meal_type';";

    $read_meal_bill = new Database();
    $meal_bill = $read_meal_bill->read($query_to_check_meal_bill); 
    
    /*print_r($meal_bill);
    echo $query_to_check_meal_bill;*/

    /*$meal_bill = mysqli_query($con, $query_to_check_meal_bill);*/
    print_r($meal_bill);

    if($type_submit=='order' && $meal_bill->num_rows==0){

        if($start_time<=$time && $time<=$end_time){

            // Query.    
            $sql = "INSERT INTO meal_bill (regno, personal, guest, guest_no, meal_type, place, sub_date) VALUES ('$regno', '$personal', '$guest', '$guest_no', '$meal_type', '$place', '$date');";

            //echo $sql;

            // Object created.
            $insert = new Database();
            $result = $insert->create($sql);

            echo 'alert("Successfully Marked")';

        }else{

            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    
        }

    }if($type_submit=='cancel' && $meal_bill->num_rows!=0){

        if($start_time<=$time && $time<=$end_time){

            // Query.    
            $sql = "DELETE FROM meal_bill WHERE sub_date = '$date' AND regno = '$regno' AND meal_type = '$meal_type';";

            // Object deleted.
            $delete = new Database();
            $result = $delete->delete($sql);

            echo 'alert("Successfully Unmarked")';

        }else{

       echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    
        }

    }else{

        echo 'alert("Rule: Can not order twice and can not delete before ordering.")';

    }

    //echo $sql;

    header('Location: ../meal.php');
    
}























?>