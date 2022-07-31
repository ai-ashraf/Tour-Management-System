<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour Management System</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
  </head>
  <body>
    <!-- Navebar -->
   
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="package-list.php">Tour Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privacy.php">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="enquiry.php">Enquiry</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-light" type="submit">Search</button>
            </form>
             <div class="admin">
             <a href="./admin-login.php">Admin</a>
             </div>
          </div>
        </div>
      </nav>
      <!-- Navebar End -->
    <!--Header-->
  
   <div class="header">
    <div class="container">
      <div class="row justify-content-between">
         <div class="col-auto">
           <div class="logo">
              <p>Tour <span>Management System</span></p>
           </div>
          </div>
      
          <div class="col-auto">
            <!-- <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bxs-user'></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Log in</a></li>
                <li><a class="dropdown-item" href="#">Registration</a></li>
              </ul>
            </div> -->
            <div class=""></div>
            <ul class="dropdown">
              <?php 
              if(empty($_SESSION['user_id'])) {
            
              ?>
                  
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-user me-2"></i>User
                      </a>
                      
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="./login.php">Log in</a></li>
                          <li><a class="dropdown-item" href="./signup.php">Sign up</a></li>
                          
                      </ul>
              <?php } 
               else{
                ?>
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-user me-2"></i><?php echo $_SESSION['user_id']; ?>
                      </a>
                      
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="./profile.php">profile</a></li>
                          <li><a class="dropdown-item" href="./logout.php">Logout </a></li>

                      </ul>   
                       <?php }?>   
              </ul>
          </div>
          </div>
      </div>
   </div>
  </div>
  <!--Header End-->
  <!-- <script src="./js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
    