<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.html'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="description" content="LifeStyle Store India's faishon e-store."/>
        <meta name="keywords" content="camera, watches, shirts"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner_image">
            <div class="inner-banner-image">
                <center>
                    <div id="banner_content">
                        <h1>Choose the best for yourself</h1>
                        <p>Flat 20% OFF on premium brands</p>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="product.php#Cameras" class="thumbnail">
                        <img src="img/camera.jpg" alt="camera"/>
                        <div class="caption">
                            <h3>Cameras</h3> 
                            <p>Click and store the amazing experiences and moments</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Watches" class="thumbnail">
                        <img src="img/watch.jpg" alt="watch"/>
                        <div class="caption">
                            <h3>Watches</h3> 
                            <p>Control the time with our best collection</p>
                        </div>                        
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Shirts" class="thumbnail">
                        <img src="img/shirt.jpg" alt="shirt"/>
                        <div class="caption">
                            <h3>Shirts</h3> 
                            <p>Stay Classy!!! Look Classy!!!</p>
                        </div>                        
                    </a>                   
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>