<?php include_once("./header.php");?>
<?php
include("./db/connect-db.php");
 $sql="SELECT * FROM package ORDER BY package_id DESC";
$rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package List</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
</head>
<body>
    <div class="banner-package mb-5">

    </div>
    <div class="container ">
        
        <h3>Package List</h3>
        <?php
        
        while($data = mysqli_fetch_array($rs)){
        $package_id = $data['package_id'];
        $package_name=$data['package_name'];
        $type=$data['type'];
        $location=$data['location'];
        $start_date=$data['start_date'];
        $end_date=$data['end_date'];
        $price=$data['price'];
        $image=$data['image'];
        $description=$data['description'];
    
        // if(isset($_POST['submit'])){
        //     $imagename=$_FILES ['image']['name'];
        //     $tmploc=$_FILES ['image']['tmp_name'];
        //     $uploc="image/" .$imagename;
        //     if($move_uploaded_file($tmploc,$uploc)){
        //         echo "success";
        //     }
        // }
        
        
        ?>
        <div class=" row mb-5">
            
            <div class="col-md-3">
                <img src="./image/<?php echo$image?>" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: <?php echo $package_name?></h4>
                        <h6>Package Type : <?php echo $type?> </h6>
                        <p><b>Package Location :</b> <?php echo $location?></p>
                        <p><b>Date : </b><?php echo $start_date?> <b>- </b><?php echo $end_date?></p>

            </div>
            <div class="col-md-3">
                <h5><?php echo $price?> Tk</h5>
                        <a href="package-details.php?package_id=<?php echo $package_id?>"  class="btn " role="button">Details</a>
            </div>
        </div>
        <?php }?>
      

            <!-- </div>
            <div class="col-md-3">
                <h5>USD 9999 Tk</h5>
                        <a href="package-details.php" class="btn " role="button">Details</a>
            </div>
        </div>
        <div class="row mb-5">
            
            <div class="col-md-3">
                <img src="./image/sadapathor.jpg" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: Sylhet Tour</h4>
                        <h6>Package Type : Regular</h6>
                        <p><b>Package Location :</b> Sylhet</p>
                        <p><b>Features</b> Bus Ticket,Ac Hotel,Meal,Local Transport Cost</p> -->

 </div>      
    <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
<?php include_once("./footer.php");?>