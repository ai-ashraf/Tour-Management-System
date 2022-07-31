<?php

include("../db/connect-db.php");

extract($_POST);


$sql="insert into package(package_name,type,location,start_date,end_date,price,image,description) values('$package_name','$type','$location','$start_date','$end_date','$price','$image','$description')";
// echo"$sql";
// exit();
$query = mysqli_query($conn,$sql);
if($query){
    
    header('location:./create.php?status=created');
  // echo"Package Created ";
         }
       else{
        echo" Failed";
        header('location:./create.php?status=fail_create');
        }
?>
