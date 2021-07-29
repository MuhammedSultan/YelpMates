<?php


 $curl = curl_init();

 curl_setopt_array($curl, [
 	CURLOPT_URL => "https://api.yelp.com/v3/businesses/search?term=restaurants&location=Jacksonville,FL&limit=17",
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

 $response = curl_exec($curl);
 $err = curl_error($curl);


 curl_close($curl);

 if ($err) {
 	echo "cURL Error #:" . $err;
 } else {
  
 	$responseArray = json_decode($response);
	
       
 }
		$zero = $responseArray->businesses[1]->id;
		$two = $responseArray->businesses[2]->id;
		$three = $responseArray->businesses[3]->id;
		$four = $responseArray->businesses[4]->id;
		$five = $responseArray->businesses[5]->id;
 		$six = $responseArray->businesses[6]->id;
 		$seven = $responseArray->businesses[7]->id;
		$eight = $responseArray->businesses[8]->id;
		$nine = $responseArray->businesses[9]->id;
		$ten = $responseArray->businesses[10]->id;
		$eleven = $responseArray->businesses[11]->id;
		$twelve = $responseArray->businesses[12]->id;
		
?>