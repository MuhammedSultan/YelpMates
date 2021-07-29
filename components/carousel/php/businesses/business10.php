<?php 
    session_start();


 //   include('inJacksonville.php');
    
   include('../apiRequests/iJDetails10.php');
    

// IMAGES

   $imgOne = $responseArrayZero->photos[0];
   $imgTwo = $responseArrayZero->photos[1];
   $imgThree = $responseArrayZero->photos[2];

// LOCATION

   $latitude = $responseArray->businesses[10]->coordinates->latitude;
   $longitude = $responseArray->businesses[10]->coordinates->longitude; 

//ID

$businessID = $responseArrayZero->id;




// getting reviews for the specific business


$curl = curl_init();

 curl_setopt_array($curl, [
 	CURLOPT_URL => "https://api.yelp.com/v3/businesses/$businessID/reviews",
 	CURLOPT_RETURNTRANSFER => true,
 	CURLOPT_FOLLOWLOCATION => true,
 	CURLOPT_ENCODING => "",
 	CURLOPT_MAXREDIRS => 10,
 	CURLOPT_TIMEOUT => 30,
 	CURLOPT_HTTPHEADER => [
 		"content-type: application/x-www-form-urlencoded",
 		"Authorization: Bearer WWORhxdC48K1oVcYBtxSNXXuMelV6t3TMGk70q3AFVBlV9C3a7xPYQl5kPTTaPO5pXhMvDDS0HX92GDzOqgyeh4rFKM0f7Xum7zeMOOWOEbGW6H1Ciexm0A74fOvYHYx"
 	],
 ]);


$reviewResponse = curl_exec($curl);
$err = curl_error($curl);


 curl_close($curl);

 if ($err) {
 	echo "cURL Error #:" . $err;
 } else {
  
 	$reviewsJSON = json_decode($reviewResponse);


   
 }


// variables related to the review endpoint

//usernames of reviewers
$firstReviewName = $reviewsJSON->reviews[0]->user->name;
$secondReviewName = $reviewsJSON->reviews[1]->user->name;
$thirdReviewName = $reviewsJSON->reviews[2]->user->name;

//the actual reviews
$firstReview = $reviewsJSON->reviews[0]->text;
$secondReview = $reviewsJSON->reviews[1]->text;
$thirdReview = $reviewsJSON->reviews[2]->text;

//the user's images
$reviewImgOne = $reviewsJSON->reviews[0]->user->image_url;
$reviewImgTwo = $reviewsJSON->reviews[1]->user->image_url;
$reviewImgThree = $reviewsJSON->reviews[2]->user->image_url;

//the rating the users gave the business
$ratingNumberOne = $reviewsJSON->reviews[0]->rating;
$ratingNumberTwo = $reviewsJSON->reviews[1]->rating;
$ratingNumberThree = $reviewsJSON->reviews[2]->rating;



//business address
if(isset($responseArray->businesses[10]->location->display_address[0])){
    $addressZero = $responseArray->businesses[10]->location->display_address[0];
}else{
    $addressZero = "This business has does not have an address.";
}

if(isset($responseArray->businesses[10]->location->display_address[1])){
   $addressOne = $responseArray->businesses[10]->location->display_address[1];
}else{
    $addressOne = "";
}

//phone number
$phone = $responseArray->businesses[10]->display_phone;


//review count
if(isset($responseArray->businesses[10]->review_count)){
   $reviewCount = $responseArray->businesses[10]->review_count;
}else{
    $reviewCount = "The reviews are not available for this business.";
}

//overall business rating
if(isset($responseArray->businesses[10]->rating)){
  $businessRating = $responseArray->businesses[10]->rating; 
}else{
   $businessRating = "The overall business rating is not available for this business.";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <?php require_once('businessCss.php');?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row mb-5">
            <div class="col-lg-12 ">
                <div class="bg-white p-5 rounded shadow">
                    <!-- Custom rounded search bars with input group -->
                    <form action="">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="search" placeholder="What're you searching for?"
                                    aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End -->
                </div>
            </div>
        </div>
        <!-- End of Nav Bar -->
        <!-- Pictures and Name of Business -->
        <div class="container download" id="downloads">
            <h2><?php echo $responseArrayZero->name;?></h2>
            <p class="lead"><?php  echo $responseArrayZero->categories[0]->title; ?></p>
            <div class="row no-gutters">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo $imgOne; ?>" class=" px-0" height="500px" width="440px">
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php echo $imgTwo; ?>" class=" px-0" height="500px" width="440px">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <img src="<?php  echo $imgThree; ?>" class=" px-0" height="500px" width="440px">
                </div>
            </div>
        </div>
        <!-- Pictures and Name of Business end -->
        <!-- Address, contact and Map info -->
        <!-- Map and address info ends -->
        <!-- Reviews Begin -->
        <section class="p-5 ">
            <div class="container">
                <div class="row">
                    <div class="col text-center"><?php echo $firstReviewName ;?> <ul>
                            <img src="<?php echo $reviewImgOne; ?>" alt="Img" height="70px" width="70px">
                            <div class="col text-center"><?php echo $ratingNumberOne  ?>/5</div>
                            <div class="col text-center"><?php echo $firstReview ;?></div>
                        </ul>
                    </div>
                    <div class="col text-center"> <?php echo $secondReviewName ;?> <ul>
                            <img src="<?php echo $reviewImgTwo; ?>" alt="Img" height="70px" width="70px">
                            <div class="col text-center"><?php echo $ratingNumberTwo ?>/5</div>
                            <div class="col text-center"><?php echo $secondReview ;?></div>
                        </ul>
                    </div>
                    <div class="col text-center"> <?php echo $thirdReviewName ;?> <ul>
                            <img src="<?php echo $reviewImgThree; ?>" alt="Img" height="70px" width="70px">
                            <div class="col text-center"><?php echo $ratingNumberThree ?>/5</div>
                            <div class="col text-center"><?php echo $thirdReview ;?></div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md">
                        <h2 class="text-center mb-4"> Contact and Address Info </h2>
                        <ul class="list-group list-group-flush lead">
                            <li class="list-group-item">
                                <span class="fw-bold">Address:</span>
                                <h4><?php echo $addressZero?></h4>
                                <h4><?php echo $addressOne ?></h4>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Phone Number:</span>
                                <h4><?php echo $phone ?></h4>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Review Count:</span>
                                <h4><?php echo $reviewCount ?> Reviews</h4>
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Rating:</span>
                                <h4><?php echo $businessRating ?> out of 5 stars</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <iframe width="100%" height="100%"
                            src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reviews End -->
        <!-- Footer --> <?php require('../../../partialFiles/footer.php');?>
        <!-- End footer -->
    </body>

</html>