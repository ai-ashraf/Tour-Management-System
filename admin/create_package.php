<?php

include("../db/connect-db.php");

extract($_POST);
            // $imagename=$_FILES ['image']['name'];
            // $tmploc=$_FILES ['image']['tmp_name'];
            // $uploc="image/" .$imagename;


$sql="insert into package(package_name,type,location,start_date,end_date,price,image,description) values('$package_name','$type','$location','$start_date','$end_date','$price','$image','$description')";
// echo"$sql";
// exit();
$query = mysqli_query($conn,$sql);
if($query){
  // move_uploaded_file($tmploc,$uploc); 
    header('location:./create.php?status=created');
  // echo"Package Created ";
         }
       else{
        echo" Failed";
        header('location:./create.php?status=fail_create');
        }
?>
