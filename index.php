<?php include_once("./header.php");?>
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
<div class="package-list ">
<div class="container">
        <h3>Package List</h3>
        <div class="row mb-5">
            
            <div class="col-md-3">
                <img src="./image/package1.jpg" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: Saint Martin Tour</h4>
                        <h6>Package Type : Regular</h6>
                        <p><b>Package Location :</b> Saint Martin Island</p>
                        <p><b>Features</b> Bus Ticket,Ship Ticket,Ac Hotel,Meal,Local Transport Cost</p>

            </div>
            <div class="col-md-3">
                <h5>USD 9999 Tk</h5>
                        <a href="package-details.php" class="btn " role="button">Details</a>
            </div>
        </div>
        <div class="row mb-5">
            
            <div class="col-md-3">
                <img src="./image/bandorban.jpg" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: Bandorban Tour</h4>
                        <h6>Package Type : Regular</h6>
                        <p><b>Package Location :</b> Bandorban</p>
                        <p><b>Features</b> Bus Ticket,Ac Hotel,Meal,Local Transport Cost</p>

            </div>
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
                        <p><b>Features</b> Bus Ticket,Ac Hotel,Meal,Local Transport Cost</p>

            </div>
            <div class="col-md-3">
                <h5>USD 9999 Tk</h5>
                        <a href="package-details.php" class="btn " role="button">Details</a>
            </div>
            
        </div>
        <div><a href="./package-list.php" class="btn mb-5" role="button">See More Packages</a></div>
        </div>
<!--Package List End-->
<!--Review-->
<div class="container">
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