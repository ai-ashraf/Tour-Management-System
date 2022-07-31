<?php include("./header.php");?>
<?php
include("./db/connect-db.php");
 $sql="SELECT * FROM package";
$rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
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
   <?php
        
        ($data = mysqli_fetch_array($rs));
        $package_id = $data['package_id'];
        $package_name=$data['package_name'];
        $type=$data['type'];
        $location=$data['location'];
        $start_date=$data['start_date'];
        $end_date=$data['end_date'];
        $price=$data['price'];
        $image=$data['image'];
        $description=$data['description'];
        ?>
    <div class="row mb-5">
         <div class="col-md-3">
            <img src="<?php echo$image?>" class="img-fluid" alt="Responsive image">

         </div>
        <div class="col-md-6">
            <h3><?php echo $package_name?></h3>
            <p><b>Package Type :</b> <?php echo $type?></p>
            <p><b>Package Location :</b> <?php echo $location?></p>
            <p><b>Date : </b><?php echo $start_date?> <b>- </b><?php echo $end_date?></p>

        </div>
        <div class="col-md-3">
            <h5><?php echo $price?> Tk</h5>
            
        </div>
        

    </div>
    <h2>Package Details</h2>
    <p><b><?php echo$description?></b><br>
        <!-- Our journey will start from Dhaka to Teknaf at **6:30pm **by  Ac Bus /Non AC (Overnight Journey).<br>
        <b>**Day-2:**</b><br>
        Start from Dhaka to Teknaf by night coach. Overnight journey. Arrive Teknaf at about **8:00am.** Then start for St. Martin’s Island by Ship which will take 2 hours. After arrival at St. Martin’s Island check in to the hotel at 2:00pm & take your lunch at restaurant within **3:00pm.** This day is free day for your enjoyment. Enjoy sea beach & sunset at St. Martin’s Island. Dinner within **9:30pm**. Overnight.
        <br><b>**Day-3:**</b><br>
        Enjoy the sunrise at St. Martin’s Island for which you have to walk less than a km from the hotel . Breakfast at **9:00am**. Enjoy the  beautiful places in Saint Martin’s and back to hotel for lunch. Take your lunch at restaurant within **3:00pm.**Afternoon & evening free. For Dinner we will arrange a BBQ night and it will start from 8:30 pm.
        <br><b>**Day-4:**</b><br>
        We will take breakfast within **9:00 Am**. Lunch time **1:00 Pm.** After taking lunch we will get ready with luggage to ride on the Ship for comeback to Dhaka. Ship start journey at 3.00 Pm. Start Journey from Teknaf at evening.
        <br><b>**Day-5:**</b><br>
        Early morning we will reach Dhaka. End of the tour.
        Note: We will provide food only at Saint Martin and at Highway restaurant.
        <br><b>Package Excluded:</b><br>
        1 Nights Accommodation with Standard category Non AC hotel share basis.
        Dhaka-Teknaf-Dhaka By  Ac Bus
        Teknaf-St.Martin-Teknaf By Ship
        3 Breakfast, 3 Lunch, 3 Dinner
        
        <br><b>Package Excluded:</b><br>
        • All Personal Expenses
        • All kind of Foods, Beverage & Mineral Water which are excluded in Package
        • Any kind of Tips and Extra Room or Bed
        </p> -->
        <div class="button mb-3 justify-content-center">
            <a href="" class="btn " role="button">Book Now</a>
        </div>
        
   </div>
   
    <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
 </body>
</html>
<?php include("./footer.php");?>