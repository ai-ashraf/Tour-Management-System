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
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">7</h3>
                                <p class="fs-5">Packages</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4</h3>
                                <p class="fs-5">Booking</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">38</h3>
                                <p class="fs-5">Users</p>
                            </div>
                            <i class="fa-solid fa-user-group fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">Enquiries</p>
                            </div>
                            <i class="fa-solid fa-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Bookings</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Tourist Name</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Saint Martin</td>
                                    <td>Jony Talukdar</td>
                                    <td>10000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bandorban</td>
                                    <td>Kobir Hasan</td>
                                    <td>7500 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Sada Pathor</td>
                                    <td>Jiniya</td>
                                    <td>6000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Sada Pathor</td>
                                    <td>Asha</td>
                                    <td>6000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Saint Martin</td>
                                    <td>Shuvo</td>
                                    <td>10000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Bandorban</td>
                                    <td>Nazmul</td>
                                    <td>7000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Sada Pathor</td>
                                    <td>Tamim Islam</td>
                                    <td>6000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Saint Martin</td>
                                    <td>Ashraf</td>
                                    <td>10000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Cox's Bazar</td>
                                    <td>Sazib</td>
                                    <td>6000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Cox's Bazar</td>
                                    <td>Zico</td>
                                    <td>8000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Amiyakhum</td>
                                    <td>Jico</td>
                                    <td>9000 Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Cox's Bazar</td>
                                    <td>Saikat</td>
                                    <td>8000 Tk</td>
                                </tr>
                            </tbody>
                        </table>
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