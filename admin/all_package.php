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
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fa-solid fa-user-group"></i> Manage Users</a>
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
             <!-- Package Start -->
            <?php
include("../db/connect-db.php");
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
        ?>
        <div class=" row mb-5">
            
            <div class="col-md-3">
                <img src="../image/<?php echo$image?>" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: <?php echo $package_name?></h4>
                        <h6>Package Type : <?php echo $type?> </h6>
                        <p><b>Package Location :</b> <?php echo $location?></p>
                        <p><b>Date : </b><?php echo $start_date?> <b>- </b><?php echo $end_date?></p>

            </div>
            <div class="col-md-3">
                <h5><?php echo $price?> Tk</h5>
                        <a href="all_package_details.php?package_id=<?php echo $package_id?>"  class="btn " role="button">Details</a>
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

                <!-- Package end -->
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