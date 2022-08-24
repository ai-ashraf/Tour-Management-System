
<?php
include("./db/connect-db.php");
session_start();
// if(empty($_SESSION['user_id'])){
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email) && !empty($password)){
        $sql="SELECT * FROM user WHERE email='$email'and password='$password'";
        $rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
        if($mysqli_num_rows){
            $data = mysqli_fetch_array($rs);
            $user_id = $data['user_id'];
            $first_name = $data['first_name'];
            $_SESSION['user_id']=$user_id;
            $_SESSION['first_name']=$first_name;
            
             
            header('location:./index.php');
        //    header(location:redirect()->back());
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
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
<?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Your account is Successfully Created. Please Login to continue</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail Create</strong>
        </div>
        <?php endif ?>
<div class="row justify-content-center mt-2 ">
        <div class="col-md-4 ">
        <h1>User login</h1>
     <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control mb-3" id="Password" name="password" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Login</button>
 </form>
</div>
</div>
</div>


<?php include_once("./footer.php");?>