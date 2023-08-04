<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASTU Car Rental</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   ASTU Car Rental </a>
            </div>
            

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li> <a href="entercar.php">Add Car</a></li>
              <li> <a href="logout.php"> Logout</a></li>
            </ul>
                    
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="logout.php"> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="clientlogin.php">Client</a></li>
                    <li><a href="customerlogin.php">Customer</a></li>
                </ul>
            </div>
                <?php   }
                ?>
            
        </div>
        
    </nav>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: white">ASTU Car Rental</h1>
                            <p class="intro-text">
                                Well Come to ASTU Online Car Rental Rervice
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Currently Available Cars</h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $car_id = $row1["car_id"];
                    $car_name = $row1["car_name"];
                    $price = $row1["ac_price"];
                    $car_img = $row1["car_img"];
               
                    ?>
            <a href="booking.php?id=<?php echo($car_id) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>">
            <h5> <?php echo $car_name; ?> </h5>
            <h6> Price: <?php echo (  $price . "K Birr"); ?></h6>
            
            </div> 
            </a>
            <?php }}
            else {
                ?>
             <h1> No cars available :( </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

    

    
    
    <div class="w3-content w3-container w3-padding-64" id="contact">
        <h3 class="w3-center">Contact Us</h3>

        
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker "></i> Nazret, Ethiopia<br>
                    <i class="fa fa-phone "></i> Phone: +251919191919<br>
                    <i class="fa fa-envelope "></i> Email: ASTUCarRental@gmail.com<br>
                </div>
            </div>
        
    </div>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>©ASTU Car Rental</h5>
                </div>
                <div class="col-sm-6 social-icons">
                    <a href="www.facebook.com/ASTUCarRental" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="www.twitter.com/ASTUCarRental" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="www.instagram.com/ASTUCarRental" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>