 <?php require('apiRequests/inJax.php');?> <section class="pt-5 pb-5">
     <div class="container">
         <div class="row">
             <div class="col-6">
                 <h3 class="">In JACKSONVILLE </h3>
                 <h6>Check out the display of restaurants</h6>
             </div>
             <div class="col-6 text-right">
                 <a class="btn btn-primary  mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                     <i class="fa fa-arrow-left"></i>
                 </a>
                 <a class="btn btn-primary  " href="#carouselExampleIndicators2" role="button" data-slide="next">
                     <i class="fa fa-arrow-right"></i>
                 </a>
             </div>
             <div class="col-12">
                 <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business1.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[1]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[1]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[1]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business2.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[2]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[2]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[2]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business3.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[3]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[3]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[3]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business4.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[4]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[4]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[4]->categories[0]->title; ?> </h5>
                                 </div>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business5.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[5]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[5]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[5]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business6.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[6]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[6]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[6]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business7.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[7]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[7]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[7]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business8.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[8]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[8]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[8]->categories[0]->title; ?> </h5>
                                 </div>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <div class="row">
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business9.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[9]->image_url;?>" alt="business"
                                             height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[9]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[9]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business10.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[10]->image_url;?>"
                                             alt="business" height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[10]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[10]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business11.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[11]->image_url;?>"
                                             alt="business" height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[11]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[11]->categories[0]->title; ?> </h5>
                                 </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
                                     <a href="components/carousel/php/businesses/business12.php" class="slider_info">
                                         <img class="img-fluid card-img-top rounded-bottom"
                                             src="<?php echo $responseArray->businesses[12]->image_url;?>"
                                             alt="business" height="130" width="300">
                                     </a>
                                     <p><?php echo $responseArray->businesses[12]->name; ?></p>
                                     <h5><?php echo $responseArray->businesses[12]->categories[0]->title; ?> </h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>