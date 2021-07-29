<?php 
    session_start();
     
   // $_SESSION['id0'] = $responseArray->businesses[0]->id;
   
    // function selectedBusiness(){
    //     $businessZero = "https://api.yelp.com/v3/businesses/".$_SESSION[''];
    // }


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
        <?php require('components/partialFiles/topLinks.php');?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- NAVBAR CODE BEGINS --> <?php require('components/partialFiles/navbar.php'); ?>
        <!-- NAVBAR CODE ENDS -->
        <!-- IN JAX CAROUSEL BEGINS --> <?php require('components/carousel/php/inJacksonville.php'); ?>
        <!-- IN JAX CAROUSEL ENDS -->
        <!-- FOOTER BEGINS --> <?php require('components/partialFiles/footer.php'); ?>
        <!-- FOOTER ENDS --> <?php require('components/partialFiles/bottomLinks.php');?>
    </body>

</html>