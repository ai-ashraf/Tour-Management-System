<?php include_once("./header.php");?>
<?php
include("./db/connect-db.php");
if(session_status()==PHP_SESSION_NONE){
    session_start();
  }
  global $conn;
  $userid = $_SESSION['user_id'];
  
  
  $sql="SELECT * FROM booking WHERE user_id='$userid' ";
  $rs = mysqli_query($conn,$sql);
         while($row= mysqli_fetch_array($rs)){



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <title>Invoice</title>
  </head>
  <body>
    <!-- <div class="container"> -->
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-md-6">

          
    <div class="card border-success" style="border: 3px solid">
        <div class="card-body ">
          <div class="container">
            <p class="text-center" style="font-size: 30px;">Thank for your Booking</p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black"><?php echo $row['name'];?></li>
                <li class="text-muted mt-1"><span class="text-black">Invoice </span> <?php echo $row['booking_id'];?></li>
                <li class="text-black mt-1"><span class="text-black">Tour-Date </span><?php echo $row['start_date'];?> To <?php echo $row['end_date'];?></li>
              </ul>
              <hr>
              <div class="col-xl-10">
                <p><?php echo $row['package_name'];?></p>
              </div>
              <div class="col-xl-2">
                <p class="float-end"><?php echo $row['price'];?> Tk </p>
                
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Mobile</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end"><?php echo $row['mobile'];?> </p>
                
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p>Address</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end"><?php echo $row['address'];?></p>
                
              </div>
              </div>
              <hr style="border: 2px solid black;">
              <div class="row">
              <div class="col-xl-10">
                <p>Person</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end"><?php echo $row['amount'];?></p>
                
              </div>
            </div>
            <hr style="border: 2px solid black;">
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end fw-bold">Total : <?php echo $row['price'] * $row['amount'];?> Tk
                </p>
              </div>
              
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
              <a href="profile.php"><u class=" btn text-info">Go to profile</u></a>
              <p>Customer satisfaction is our success. </p>
            </div>
      
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<?php } ?>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php include_once("./footer.php");?>