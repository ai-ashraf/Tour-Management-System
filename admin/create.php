<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/boxicons.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    
<div class="container">
<a href="index.php" class="btn btn-light mb-3 mt-3"><< Go Back</a>
<div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Package</strong>
            </div>

            <div class="card-body ">
            <div class="container">
            <?php if (isset($_GET['status']) && $_GET['status'] == "created") : ?>
        <div class="alert alert-success" role="alert">
            <strong>Your Package is Successfully Created</strong>
        </div>
        <?php endif ?>
        <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
        <div class="alert alert-danger" role="alert">
            <strong>Fail To Create</strong>
        </div>
        <?php endif ?>
        <?php
        if(isset($_POST['submit'])){
            $filename=$_FILES ['image']['name'];
            $tmploc=$_FILES ['image']['tmp_name'];
            $uploc="image/" .$filename;
            if($move_uploaded_file($tmploc,$uploc)){
                echo "success";
            }
        }
        
        ?>
                 <div class="row justify-content-center">
                    <div class="col-md-6">
                <form action="./create_package.php" method="post">
                
                    <div class="form">
                        <div class="form-group">
                            <label for="package_name" class="col-form-label">Package Name</label>
                            <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Package Name" required>
                        </div>
                        <div class="form-group">
                            <label for="type" class="col-form-label">Package Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Package Type" required>
                        </div>
                    
                    </div>
                    <div class="form ">
                    <div class="form-group">
                            <label for="location" class="col-form-label">Package Location</label>
                            <input type="text" class="form-control" name="location" id="location" placeholder=" Enter Package Location" required>
                        </div>
                        <div class="form-group">
                            <label for="start_date" class="col-form-label">Tour Start Date</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Tour Start Date" required>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-form-label">Tour End Date</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Tour End Date" required>
                        </div>
                        <div class="form-group ">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group ">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" accept="image/*" class="form-control" name="image" id="image" placeholder="Image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2" name="submit"><i class="fa fa-check-circle"></i> Save</button>
                </form>
             </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            <script src="./js/bootstrap.bundle.min.js"></script>
            </body>
</html>