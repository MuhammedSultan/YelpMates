<?php 

$curl = curl_init();

 curl_setopt_array($curl, [
 	CURLOPT_URL => "https://api.yelp.com/v3/businesses/jBYbuH1SZJnH01_t-34mRw",
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
  
 	//$responseArray = json_decode($response);
	
 	
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            integrity="undefined" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
            integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
            integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/categories.css">
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <section class="container">
            <h3>Categories</h3>
            <div class="row responsive">
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/pizza.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/burrito.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/chinese-fried-rice.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/sushi.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/fried-chicken.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/fish-food.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/spaghetti.png" /></div>
                </div>
                <div class="col-md-12">
                    <div id="circle"><img src="https://img.icons8.com/fluent/48/000000/souvla.png" /></div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
        $('.responsive').slick({
            infinite: false,
            speed: 300,
            slidesToShow: 8,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
        </script>
    </body>

</html>