<?php
session_start();
$result=array();
$result["email_error"]="";
$result["password_error"]="";
$result["success"]="";
$result["failure"]="";
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    include "dbconnection.php";  
    $email="";
    $password="";
    $hash="";    
    if(empty($_POST['email'])){
        $result['email_error']="*Email is required";
    }
    else{
        $email=$_POST['email'];
    }
    if(empty($_POST['password'])){
        $result['password_error']="*Password is required";
    }
    else{
        $password=$_POST['password'];
        $hash=md5($password);
    }
    if($email !="" && $password !=""){
        $sql="SELECT * from users Where email='$email' ";
        $res=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($res);
        if($num > 0){
            while($row = mysqli_fetch_array($res)){
                $user_id = $row['id'];
                $user_name = $row['name'];
                $user_email = $row['email'];
                $user_password = $row['password'];
                if($hash == $user_password){
                    $_SESSION['id'] = $user_id;      
                    $_SESSION['name'] = $user_name;  
                    $_SESSION['email'] = $user_email;
                    $result['success']="Login Successful";
                }
                else{
                $result['failure'] = "Invalid Credentials";
                }
            }
        }
        else{
            $result['failure']="User not exists";
        }
    }
}

echo json_encode($result);
?>