<?php include_once("./header.php");?>
<?php

include("./db/connect-db.php");

extract($_POST);


$sql="insert into user(first_name,last_name,mobile,email,password) values('$first_name','$last_name','$mobile','$email','$password')";
$rs = mysqli_Query($conn,$sql);
if($rs){
    
    header('location:./login.php?status=created');
  echo"Thank you for Registration. Please Login ";
         }
       else{
        echo"Registration Failed";
        header('location:./signup.php?status=fail_create');
        }
?>
