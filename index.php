<?php include_once("./header.php");?>
<?php include("./db/connect-db.php");
 $sql="SELECT * FROM package ORDER BY package_id DESC LIMIT 3";
$rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
  
<!--Banner-->


     <div class="banner mb-5">
        
     </div>


<!--/banner-->
<!--Package List-->
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
        <div class="d-flex justify-content-center"><a href="./package-list.php" class="btn mb-5 mt-3" role="button">See More Packages</a></div>
        </div>
<!--Package List End-->
<!--Review-->
<div class="container mt-3">
  <div class="row justify-content-center mb-5">
<div class="col-md-3"></div>
<div class="col-md-6 well">
  <h3 class="">How was your Experience with Us?</h3>
  <hr style="border-top:1px dotted #ccc;"/>
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div>
      <h3>Rating:</h3>
      <span id="1" style="font-size:25px; cursor:pointer;"  class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)" ></span>
      <span id="2"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="3"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="4"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="5"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
    </div>
    <br />
    <div class="form-group">
      <h3>Review:</h3>
      <textarea id="review" class="form-control" style="resize:none;margin-bottom: 10px; height:100px;"></textarea>
    </div>
    <center><button  class="btn btn-success" onclick="result()">SUBMIT</button></center>
    <div id="result"></div>
  </div>
</div>
</div>
</div>
<!--Review end-->
</body>
</html>
<?php include_once("./footer.php");?>