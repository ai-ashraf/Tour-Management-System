
<?php
include("./db/connect-db.php");
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email) && !empty($password)){
        $sql="SELECT * FROM admin WHERE email='$email'and password='$password'";
        $rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
        if($mysqli_num_rows){
            $data = mysqli_fetch_array($rs);
            $id = $data['admin_id'];
            $_SESSION['admin_id']=$id;
            header('location:./admin/index.php');
        }
        else{
            echo "login failed";
        }
        
    }
    else{
        echo "fillup all fields";
    }
}


?>
<?php include_once("./header.php");?>
<div class="container" style="height: 420px;">
<div class="row justify-content-center mt-2 ">
        <div class="col-md-4 ">
        <h1>Admin login</h1>
     <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control mb-3" id="Password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-5">Login</button>
 </form>
</div>
</div>
</div>
<?php include_once("./footer.php");?>