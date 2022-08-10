<?php
function user_info(){
    global $conn;
    $userid = $_SESSION['user_id'];
    
    
    $sql = " SELECT * FROM user WHERE user_id=$userid";
    $rs = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($rs);
    return $data;

}
?>
<?php
// function package_details(){
//     global $conn;
//     $package_id = $_SESSION['package_id'];
    
    
//     $sql = " SELECT * FROM package WHERE package_id=$package_id";
//     $rs = mysqli_query($conn,$sql);
//     $data = mysqli_fetch_assoc($rs);
//     return $data;

// }
?>