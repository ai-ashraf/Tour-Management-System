<?php include_once("./header.php");?>
<?php include("./db/connect-db.php");
 $sql="SELECT * FROM package ORDER BY package_id DESC LIMIT 3";
$rs = mysqli_Query($conn,$sql);
        $mysqli_num_rows = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
  
<!--Banner-->


     <div class="banner mb-5">
        
     </div>


<!--/banner-->
<!--Package List-->
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
                <img src="./image/<?php echo$image?>" class="img-fluid" alt="Responsive image">

            </div>
            <div class="col-md-6">
                <h4>Package Name: <?php echo $package_name?></h4>
                        <h6>Package Type : <?php echo $type?> </h6>
                        <p><b>Package Location :</b> <?php echo $location?></p>
                        <p><b>Date : </b><?php echo $start_date?> <b>- </b><?php echo $end_date?></p>

            </div>
            <div class="col-md-3">
                <h5><?php echo $price?> Tk</h5>
                        <a href="package-details.php?package_id=<?php echo $package_id?>"  class="btn " role="button">Details</a>
            </div>
        </div>
        
        <?php }?>
        <div class="d-flex justify-content-center"><a href="./package-list.php" class="btn mb-5 mt-3" role="button">See More Packages</a></div>
        </div>
<!--Package List End-->
<!--Review old-->
<!-- <div class="container mt-3">
  <div class="row justify-content-center mb-5">
<div class="col-md-3"></div>
<div class="col-md-6 well">
  <h3 class="">How was your Experience with Us?</h3>
  <hr style="border-top:1px dotted #ccc;"/>
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <div>
      <h3>Rating:</h3>
      <span id="1" style="font-size:25px; cursor:pointer;"  class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)" ></span>
      <span id="2"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="3"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="4"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
      <span id="5"  style="font-size:25px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
    </div>
    <br />
    <div class="form-group">
      <h3>Review:</h3>
      <textarea id="review" class="form-control" style="resize:none;margin-bottom: 10px; height:100px;"></textarea>
    </div>
    <center><button  class="btn btn-success" onclick="result()">SUBMIT</button></center>
    <div id="result"></div>
  </div>
</div>
</div>
</div> -->
<!--Review old end-->
<!-- Review new start -->
<?php
if(isset($_SESSION['user_id'])){ 
  

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container ">
    <div class="row justify-content-center">
<!-- Not Needed Now -->
    	<!-- <h1 class="mt-5 mb-5 text-center">Please Review & Rating us </h1>
    	<div class="card">
    		<div class="card-header">Average Rating</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div> -->
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
            </div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>
<?php }?>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<!-- <div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div> -->
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
<!-- Show rating from database -->
<?php
       include_once("./db/connect-db.php");
       $sql="SELECT * FROM review ORDER BY review_id DESC LIMIT 4";
       $rs = mysqli_Query($conn,$sql);
       $mysqli_num_rows = mysqli_num_rows($rs);


?>
<div class="container">
  <div class="row">
    <?php
    while($data = mysqli_fetch_array($rs)){
      $user_name = $data['user_name'];
      $user_rating=$data['user_rating'];
      $user_review=$data['user_review'];
      ?>
    
      <div class="col-md-3">
      <div class="card text-center mb-3" >
  <div class="card-header text-warning">
    <h3>Review</h3>
  </div>
  <div class="card-body" style="height: 200px;">
    <h4 class="card-title"><?php echo $user_name?></h4>
    <h5 class="text-warning"><?php echo $user_rating?> <i class="fa-solid fa-star"></i></h5>
    <p class="card-text"><?php echo $user_review?></p>
    
  </div>
  <div class="">
   
  </div>
</div>
      </div>
        
    

    <?php }?>
    <div class="d-flex justify-content-center"><a href="./review.php" class="btn mb-5 mt-3" role="button">See More Review</a></div>
  </div>
</div>


<!-- Review new end -->
</body>
</html>
<?php include_once("./footer.php");?>