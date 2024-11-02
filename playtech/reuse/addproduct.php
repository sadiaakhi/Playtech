<?php

    session_start();

     $conn = mysqli_connect("localhost","root","","playtech");

     if(!$conn){
        die("connection failed");
     }
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add product</title>
    <link rel="stylesheet" href="index.css">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


    <style>
        .box{
            height: 540px;
            width: 90%;
            margin: 3% auto;
            
        }
        .form-control{
            border: 1px solid #b3a1a1;

        }
        
    </style>
    
    
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">
    
        <!--
            
            
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
    
        -->
    
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" >
                        <img src="assets/img/playtech.png" height="50px" width="230px">
                    </a>
                </div>
    
                <ul class="nav">
                    <li class="">
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
    
                    <li class="active">
                        <a href="addproduct.php">
                            <i class="pe-7s-graph"></i>
                            <p>Add Product</p>
                        </a>
                    </li>
    
                    <li class="">
                        <a href="editproduct.php">
                            <i class="pe-7s-graph"></i>
                            <p>Edit Product</p>
                        </a>
                    </li>
    
                    <li class="">
                        <a href="admin_order.php">
                            <i class="pe-7s-graph"></i>
                            <p>Orders</p>
                        </a>
                    </li>
    
                    <li class="">
                        <a href="user_info.php">
                            <i class="pe-7s-graph"></i>
                            <p>Users</p>
                        </a>
                    </li>
    
                </ul>
            </div>
        </div>

        <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="addproduct.php">Add Product</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    
                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                    
                        <li>
                            <a href="../home.html">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

       <div class="box">
            <h4><b> Add new product details </b></h4><hr>

                    <form action="add_code.php" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="name" name="name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Model/Version</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="model/version" name="model">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress">Product Description</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="product description " name="description">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress2">Restock</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="restock">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Price</label>
                    <input type="number" class="form-control" id="inputCity" name="price">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="status">
                        <option selected>Available</option>
                        <option>Not Available</option>
                        <option>Shipment Pending </option>
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Quantity</label>
                    <input type="number" class="form-control" id="inputZip" name="quantity">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
                <div class="col-md-12">
                <button type="submit" class="btn btn-primary col-md-1" name="save">Save</button>
                </div>
                </form>
       </div>
       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="dashboard.php">Playtech Co.</a> made with love for a better web
                </p>
            </div>
        </footer>
        </div>

    </div>

</body>

      <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!--
	<script >
        
    	alertify.set('notifier','position', 'top-right');
        alertify.success('');
      
	</script>-->

</html>