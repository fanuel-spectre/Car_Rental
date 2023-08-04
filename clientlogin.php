<?php
include('login_client.php'); 

if(isset($_SESSION['login_client'])){
    header("location: index.php"); 
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title> Client Login | ASTU Car Rental </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
</head>
    <body>
           
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
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
                        <li><a href="#"> Welcome <?php echo $_SESSION['login_client']; ?></a></li>
                        <li> <li> <a href="entercar.php">Add Car</a></li>
                        <li><a href="logout.php"> Logout</a></li>
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
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
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
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="clientlogin.php">Client</a>
                                </li>
                                <li>
                                    <a href="customerlogin.php">Customer</a>
                                </li>
                            </ul>
                        </div>
                        <?php   }
                ?>
                        
        </div>
        
    </nav>
        <div class="container">
            <div class="jumbotron">
                <h2>Client Form | ASTU Car Rental  </span>
                </h2>
            </div>
        </div>

        <div class="container" style="margin-top: -2%; margin-bottom: 2%;">
            <div class="col-md-5 col-md-offset-4">
                <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
                <div class="panel panel-primary">
                    <div class="panel-heading"> Login </div>
                    <div class="panel-body">

                        <form action="" method="POST">

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Username" required="">
                                        <span class="input-group-btn">
                
            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
                                        <span class="input-group-btn">
                
                                        </span>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-4">
                                    <button class="btn btn-primary" name="submit" type="submit" value=" Login ">lOGIN</button>

                                </div>

                            </div>
                            <label style="margin-left: 5px;"><a href="clientsignup.php">Create a new account.</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© ASTU Car Rental</h5>
                </div>
            </div>
        </div>
    </footer>

    </html>