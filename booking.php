<?php include_once("./header.php");?>
<!-- Package database table  -->

<!-- Package database table end -->

<?php
include("./db/connect-db.php");
if(session_status()==PHP_SESSION_NONE){
    session_start();
  }
  
if(!isset($_SESSION['user_id'])){ 
    header("Location:login.php");
}

include("./function.php");
$user_info= user_info();
include("./db/connect-db.php");
$packageId = (int)$_GET['package_id'];
$sql="SELECT * FROM package WHERE package_id='$packageId' ";
$rs = mysqli_query($conn,$sql);

       

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // print_r($_POST);
    // $user_info= user_info();
    // echo $user_info['user_id'];
    // echo $user_info['first_name'];
    // echo $user_info['mobile'];

    include("./db/connect-db.php");

extract($_POST);
$sql="insert into booking(package_id,package_name,price,start_date,end_date,user_id,name,mobile,address,amount) values('$package_id','$package_name','$price','$start_date','$end_date','$user_id','$name','$mobile','$address','$amount')";
$r = mysqli_Query($conn,$sql);
if($r){
    
    header('location:./invoice.php');

    }
  else{
   echo"Booking Failed";
   header('location:./package-list.php?status=fail_create');
   }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- User details start -->   
<?php
while($row= mysqli_fetch_array($rs)){
?>
<!-- User details End-->

    <!-- Booking Form Start -->
    <div class="container" style="height: 420px;">
        <div class="row mt-2 mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="card border-success">
                    <div class="card-body">
                    <form action="" method="POST">
                        <!-- package -->
                        <input type="hidden" name="package_id" value="<?= $packageId?>" >
                        <input type="hidden" name="package_name" value="<?= $row['package_name']?>" >
                        <input type="hidden" name="price" value="<?= $row['price']?>" >
                        <input type="hidden" name="start_date" value="<?= $row['start_date']?>" >
                        <input type="hidden" name="end_date" value="<?= $row['end_date']?>" >
                        <?php }?>
                        <!-- User -->
                        <input type="hidden" name="user_id" value="<?= $user_info['user_id']?>" >
                        <input type="hidden" name="name" value="<?= $user_info['first_name']?> <?= $user_info['last_name']?>" >
                        <input type="hidden" name="mobile" value="<?= $user_info['mobile']?>" >
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3 justify-content-between">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                <select class="form-select" aria-label="room" required>
                                <option selected>Select Room Type</option>
                                <option value="1">Single</option>
                                <option value="2">Couple</option>
                                
                                </select>
                                </div>
                            <div class="col-md-6">
                            <label for="amount" class="form-label">Number of people</label>
                            <input type="number" value="1"class="form-control" id="amount" name="amount" required>
                        </div>
                        </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree the terms & policy</label>
                        
                        </div>
                        
                        <!-- <a href="invoice.php" class="btn btn-success" role="button">Book</a> -->
                    
                        <button class="btn btn-success" role="button">Book</a>

                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>
<?php include_once("./footer.php");?>