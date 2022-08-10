<?php include("./header.php");?>
<?php
include("./db/connect-db.php");

    $id = (int)$_GET['package_id'];
 $sql="SELECT * FROM package WHERE package_id='$id' ";
$rs = mysqli_query($conn,$sql);
       while($row= mysqli_fetch_array($rs)){

            // echo $row['package_name'];
            // exit();

       
?>
<html>
    <head>
        <title>Package</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/all.min.css" />
        <link rel="stylesheet" href="./css/style.css">
    </head>
 <body>

    <div class="banner-package mb-5"></div>
        <div class="container">
        
            <div class="row mb-5">
                <div class="col-md-6">
                    <img src="./image/<?php echo $row['image']?>" class="img-fluid" alt="Responsive image">
                </div>
                        <div class="col-md-6">
                                <h3><?php echo $row['package_name'];?></h3>
                                <p><b>Package Type :</b> <?php echo $row['type'];?></p>
                                <p><b>Package Location :</b> <?php echo $row['location'];?></p>
                                <p><b>Tour Date : From </b><?php echo $row['start_date'];?> <b> To </b><?php echo $row['end_date'];?></p>
                                <h5>Price: <?php echo $row['price'];?> Tk</h5>
                                <h4>Package Details</h4>
                                <p><b><?php echo $row['description'];?></b><br>

                        </div>
                <div class="col-md-3">        
             </div>
         </div>     
   </div>
   <div class="row justify-content-center">
    <div class="col-lg-2 ">
    <div class="button mb-3 ">
            <a href="" class="btn " role="button">Book Now</a>
        </div>
    </div>
   </div>
   <?php } ?>
   
    <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
 </body>
</html>
<?php include("./footer.php");?>