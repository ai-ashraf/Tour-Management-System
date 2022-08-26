<?php include("./header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    <div class="banner-package mb-5"></div>
    <!--Review start-->
<!-- Show rating from database -->
<?php
       include_once("./db/connect-db.php");
       $sql="SELECT * FROM review ORDER BY review_id DESC";
       $rs = mysqli_Query($conn,$sql);
       $mysqli_num_rows = mysqli_num_rows($rs);


?>
<div class="container">
  <div class="row">
    <?php
    while($data = mysqli_fetch_array($rs)){
      $user_name = $data['user_name'];
      $user_rating=$data['user_rating'];
      $user_review=$data['user_review'];
      ?>
    
      <div class="col-md-3">
      <div class="card text-center mb-3">
  <div class="card-header text-warning">
    <h3>Review</h3>
  </div>
  <div class="card-body" style="height: 250px;">
    <h4 class="card-title"><?php echo $user_name?></h4>
    
    <h5 class="text-warning"><?php echo $user_rating?> <i class="fa-solid fa-star"></i></h5>

    <p class="card-text"><?php echo $user_review?> </p>
    
  </div>
  <div class="">
   
  </div>
</div>
      </div>
        
    

    <?php }?>
  </div>
</div>
    <!--Review End-->
    <?php include("./footer.php");?>
</body>
</html>