<?php include_once("./header.php");?>
<?php
include("./db/connect-db.php");
if(session_status()==PHP_SESSION_NONE){
  session_start();
}
include("./function.php");
$user_info= user_info();
?>
<div class="banner-package mb-5"> </div>
<!-- Tour History -->
<div class="container">
<?php
      
        // $first_name=($_SESSION['first_name']);

        //     $sql="SELECT * FROM user WHERE first_name = $first_name";
        //     $rs = mysqli_query($conn,$sql);
            
        // $data = mysqli_fetch_array($rs);
        // $first_name = $data['first_name'];
        // $last_name=$data['last_name'];
        // $mobile=$data['mobile'];
        // $email=$data['email'];
        // $password=$data['password'];
      
        // echo $email;
        
      
    
      
      
    
      
      
    
  
      
?>
<table class="table table-success table-striped">
  <thead>
    <h3>My Tour History</h3>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Package Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Saint Martin</td>
      <td>Teknaf</td>
      <td>25.7.22</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bandorban</td>
      <td>Bandorban</td>
      <td>13.5.22</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sadapathor</td>
      <td>Sylhet</td>
      <td>10.2.22</td>
    </tr>
  </tbody>
</table>
</div>
<!-- User Profile -->
<div class="container">
<div class="row  mt-5 mb-5">
        <div class="col-md-6 ">
        <h3>My Details</h3>
     <!-- <form action="./registration-save.php" method="post"> -->
        
  <div class="form-group">
     <h5>Name: <?php echo $user_info['first_name'];?> <?php echo $user_info['last_name'];?></h5>
     <h5>Mobile Number : <?php echo $user_info['mobile'];?></h5>
     <h5>Email address : <?php echo $user_info['email'];?></p>
     <p>Password : <?php echo $user_info['password'];?></p>

    
  </div>
   


</div>
</div>
</div>

<?php include_once("./footer.php");?>