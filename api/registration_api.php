<?php
$result = array();
$result["name_error"]="";
$result["email_error"]="";
$result["password_error"]="";
$result["cpassword_error"]="";
$result["success"]="";
$result["failure"]="";
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    include "dbconnection.php";        
    $username = "";
    $email = "";
    $password = "";
    $cpassword = "";

    if (empty($_POST["username"])) {
      $result["name_error"] = "*Name is required";
    }
    else {
      $username = $_POST["username"];
    }
    if (empty($_POST["email"])) {
        $result["email_error"] = "*Email is required";
    }
    else {
      $email = $_POST["email"];
    }
    if (empty($_POST["password"])) {
        $result["password_error"] = "*Password is required";
    }
    else {
      $password = $_POST["password"];
    }
    if (empty($_POST["cpassword"])) {
      $result["cpassword_error"] = "*Confirm Password is required";
    }
    else {
      $cpassword = $_POST["cpassword"];
    }
    if($password != $cpassword){
      $result["cpassword_error"] = "*Password and Confirm Password should not match";      
    }

    if($username != "" && $email != "" && $password != "" && $cpassword != ""){
      $sql = "Select * from users where email='$email'"; 
      $res = mysqli_query($conn, $sql); 
      $num = mysqli_num_rows($res);  
      if($num == 0) { 
          
              $hash = md5($password); 
              $sql = "INSERT INTO `users` ( `name`, `email`, `password`) VALUES ('$username', '$email', '$hash')"; 
              $res = mysqli_query($conn, $sql); 
              if ($res) { 
                //   $showAlert = true;
                $result["success"] = "Registered Successfully"; 
                $result["failure"] = "";
              } 
              else{
                $result["failure"] = "DB Error".$conn->connect_error; 
                $result["success"] = "";
              }   
      }
      else{
        // echo "email already exists";
        $result["email_error"] = "*Email already exists"; 
      }
    }         
       
}  
echo json_encode($result);
    
?> 