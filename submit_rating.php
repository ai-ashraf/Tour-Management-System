<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
  }
//submit_rating.php

// $connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
include("./db/connect-db.php");

if(isset($_POST["rating_data"]))
{
    // extract($_POST);
	$data = array(
		// ':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);
      $user_name = $_SESSION["first_name"];
      $user_rating = $_POST["rating_data"];
      $user_review = $_POST["user_review"];

    // return 0;

	$query = "
	INSERT INTO review 
	(user_name, user_rating, user_review, datetime) 
	VALUES ('$user_name', '$user_rating', '$user_review', 'datetime')
	";

	// $statement = $connect->prepare($query);

	// $statement->execute($data);
    $rs = mysqli_Query($conn,$query);
    $statement =$rs;

	echo "Your Review & Rating Successfully Submitted";

}

// if(isset($_POST["action"]))
// {
// 	$average_rating = 0;
// 	$total_review = 0;
// 	$five_star_review = 0;
// 	$four_star_review = 0;
// 	$three_star_review = 0;
// 	$two_star_review = 0;
// 	$one_star_review = 0;
// 	$total_user_rating = 0;
// 	$review_content = array();

// 	$query = "
// 	SELECT * FROM review 
// 	ORDER BY review_id DESC
// 	";
//     $rs = mysqli_Query($conn,$query);
//     $data = mysqli_fetch_assoc($rs);
//     return $data;
// 	$result = $data;

// 	foreach($result as $row)
// 	{
// 		$review_content[] = array(
// 			'user_name'		=>	$row["user_name"],
// 			'user_review'	=>	$row["user_review"],
// 			'rating'		=>	$row["user_rating"],
// 			'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
// 		);

// 		if($row["user_rating"] == '5')
// 		{
// 			$five_star_review++;
// 		}

// 		if($row["user_rating"] == '4')
// 		{
// 			$four_star_review++;
// 		}

// 		if($row["user_rating"] == '3')
// 		{
// 			$three_star_review++;
// 		}

// 		if($row["user_rating"] == '2')
// 		{
// 			$two_star_review++;
// 		}

// 		if($row["user_rating"] == '1')
// 		{
// 			$one_star_review++;
// 		}

// 		$total_review++;

// 		$total_user_rating = $total_user_rating + $row["user_rating"];

// 	}

// 	$average_rating = $total_user_rating / $total_review;

// 	$output = array(
// 		'average_rating'	=>	number_format($average_rating, 1),
// 		'total_review'		=>	$total_review,
// 		'five_star_review'	=>	$five_star_review,
// 		'four_star_review'	=>	$four_star_review,
// 		'three_star_review'	=>	$three_star_review,
// 		'two_star_review'	=>	$two_star_review,
// 		'one_star_review'	=>	$one_star_review,
// 		'review_data'		=>	$review_content
// 	);

// 	echo json_encode($output);

// }

?>