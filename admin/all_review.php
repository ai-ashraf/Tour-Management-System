<?php
include_once("../db/connect-db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <title> Admin Dashboard</title>
    
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Tour Management</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fal fa-chart-line me-2"></i>Dashboard</a>
                <a href="create.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Create Packages</a>
                <a href="all_package.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-user-group"></i>See Package</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-money-bill-1-wave me-2"></i>Payments</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-question me-2"></i>Enquiries</a>
                <a href="../reviews.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-star me-2"></i>Reviews</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fal fa-tasks me-2"></i>Manage Booking</a>
                
                <a href="../logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                 
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
    <!-- <div class="banner-package mb-5"></div> -->
    <!--Review start-->
<!-- Show rating from database -->
<?php
       include_once("../db/connect-db.php");
       $sql="SELECT * FROM review ORDER BY review_id DESC";
       $rs = mysqli_Query($conn,$sql);
       $mysqli_num_rows = mysqli_num_rows($rs);


?>
<div class="container mt-5">
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

                        
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>