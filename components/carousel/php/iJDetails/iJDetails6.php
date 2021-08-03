<?php 


        
   require('../apiRequests/inJax.php');

  

// getting a specific business's details   

$curl = curl_init();

 curl_setopt_array($curl, [
 	CURLOPT_URL => "https://api.yelp.com/v3/businesses/" . $six,
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


$responseZero = curl_exec($curl);
$err = curl_error($curl);


 curl_close($curl);

 if ($err) {
 	echo "cURL Error #:" . $err;
 } else {
  
 	$responseArrayZero = json_decode($responseZero);


 }


 ?>