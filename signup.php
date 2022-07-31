<?php include_once("./header.php");?>
<div class="container">
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
        <h1>User Registration</h1>
     <form action="./registration-save.php" method="post">
        
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="tel" pattern="[0-9]{11}" class="form-control" id="mobile" name="mobile" maxlength="11" required placeholder="Enter Mobile Number">
  </div>
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" name="password" required placeholder="Enter Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I am agree to privacy policy</label>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
 </form>
</div>
</div>
</div>
<?php include_once("./footer.php");?>