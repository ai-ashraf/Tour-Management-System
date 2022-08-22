<?php include_once("./header.php");?>
<?php

if(session_status()==PHP_SESSION_NONE){
    session_start();
  }
  
if(!isset($_SESSION['user_id'])){ 
    header("Location:login.php");
}
else{




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-2 mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="card border-success">
                    <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label >
                            <input type="text" class="form-control" id="name"  name="name"  aria-describedby="name" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" aria-describedby="mobile" required>
                            
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3 justify-content-between">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                <select class="form-select" aria-label="room" required>
                                <option selected>Select Room Type</option>
                                <option value="1">Single</option>
                                <option value="2">Couple</option>
                                
                                </select>
                                </div>
                            <div class="col-md-6">
                            <label for="amount" class="form-label">Number of people</label>
                            <input type="number" value="1"class="form-control" id="amount" name="amount" required>
                        </div>
                        </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree the terms & policy</label>
                        
                        </div>
                        
                        <a href="invoice.php" class="btn btn-success" role="button">Book</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>
<?php include_once("./footer.php");?>