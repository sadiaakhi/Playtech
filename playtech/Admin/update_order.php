<!doctype html>
<html lang="en">
  <head>
    <title>Update Orders </title>
    
    <link rel="stylesheet" href="index.css">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

   
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <link href="assets/css/demo.css" rel="stylesheet" />


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
  
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
 
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <style>
        .box{
            height: 540px;
            width: 90%;
            margin: 3% auto;
            
        }
        .form-control{
            border: 1px solid #b3a1a1;

        }
        .back{
            float: right;
            display: flex;
            padding-right: 120px;
            font-size: 16px;
            
        }
        .i{
            padding-right: 4px;
        }
        
    </style>
    
 </head>

  <body>

  <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">
    
        
    
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
    
                    <li class="">
                        <a href="Add_product.php">
                            <i class="pe-7s-graph"></i>
                            <p>Add Product</p>
                        </a>
                    </li>
    
                    <li class="">
                        <a href="Edit_product.php">
                            <i class="pe-7s-graph"></i>
                            <p>Edit Product</p>
                        </a>
                    </li>
    
                    <li class="active">
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
                    <li class="">
                        <a href="feedback.php">
                            <i class="pe-7s-graph"></i>
                            <p>Feedback</p>
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
                    <a class="navbar-brand" href="addproduct.php">Update Order</a>
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
                            <a href="../home.html">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

    <section class="bg">

    <div class="back">
        <div class="i"><i class="bi bi-box-arrow-left"></i></div>
        <a href="admin_order.php"> Go Back</a>
    </div>
    <div class="box">
        <h4><b> Apply Change In Order </b></h4><hr>
    

         <form action="#" method="post" enctype="multipart/form-data">
             
            <?php
             $conn = mysqli_connect("localhost","root","","playtech");
    
             if(isset($_GET['id'])){
                $pid =$_GET['id'];
                $query = "SELECT * FROM orders WHERE number=$pid";
                $getdata = mysqli_query($conn,$query);
                
                while($rx=mysqli_fetch_assoc($getdata)){
                    $date = $rx['order_date'];
                    $name = $rx['user_Name'];
                    $email = $rx['email'];
                    $contact = $rx['contact'];
                    $address = $rx['address'];
                    $pname = $rx['product'];
                    $total = $rx['total_Amount'];
                    $pm = $rx['payment_method'];
                    $ps = $rx['payment_status'];
                    $status = $rx['status'];
               
            ?>
                            <div class="form-row">
                            <div class="form-group col-md-2">
                            <label for="inputEmail4">Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="<?php echo $date; ?>">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputPassword4">User Name</label>
                            <input type="text" class="form-control" name="user_Name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputPassword4">Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputAddress">Contact Number</label>
                            <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">User Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                            <label for="inputAddress2">Product Name</label>
                            <input type="text" class="form-control" name="product" value="<?php echo $pname; ?>">
                            </div>
                            </div>
                            <div class="form-row">      
                            <div class="form-group col-md-8">
                            <label for="inputState">Payment Status</label>
                            <select type="inputState" class="form-control" name="payment_status" value="<?php echo $ps; ?>">
                                <option selected>Paid</option>
                                <option>Unpaid</option>
                                <option>Pending </option>
                                <option>Refund </option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">Payment Method</label>
                            <select type="inputState" class="form-control" name="payment_method" value="<?php echo $pm; ?>">
                                <option selected>COD</option>
                                <option>Bkash</option>
                                <option>Nagad</option>
                                <option>Card</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-row">      
                            <div class="form-group col-md-8">
                            <label for="inputState">Status</label>
                            <select type="inputState" class="form-control" name="status" value="<?php echo $status; ?>">
                                <option selected>Pending</option>
                                <option>Shipped</option>
                                <option>On the way</option>
                                <option>Delivered</option>
                                <option>Confirm</option>
                                <option>Cancelled </option>
                                <option>Delayed </option>
                            </select>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputZip">Total</label>
                            <input type="number" class="form-control"  name="total_Amount" value="<?php echo $total; ?>">
                            </div>
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary col-md-1" value="Update" name="up-btn">Save</button>
                            </div>
                            
                 
            
                 <?php   }} ?>

                 <?php
                 if(isset($_POST['up-btn'])){
                    $d = $_POST['order_date'];
                    $n = $_POST['user_Name'];
                    $e = $_POST['email'];
                    $c = $_POST['contact'];
                    $address = $_POST['address'];
                    $pn = $_POST['product'];
                    $t = $_POST['total_Amount'];
                    $pm = $_POST['payment_method'];
                    $ps = $_POST['payment_status'];
                    $status = $_POST['status'];

                    $query = "UPDATE orders SET order_date='$d', user_Name='$n', address='$address', product='$pn', email='$e', contact='$c',	total_Amount='$t', payment_method='$pm', payment_status='$ps', status='$status' WHERE number=$pid";
                    $updatequery= mysqli_query($conn,$query);

                    if($updatequery){   
                    
                        echo "Updated !";
                       
                        
                    }
                    
                 }
                 ?>
         </form>

     </div>

    </section>  

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


    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>


	<script src="assets/js/chartist.min.js"></script>


	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>


	<script src="assets/js/demo.js"></script>
    
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");


</html>
