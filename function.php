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