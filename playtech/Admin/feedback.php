

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users</title>
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


    <style>
        .box{
            height: 540px;
            width: 90%;
            margin: 3% auto;
            
        }
        .th{
            font-size: 16px;
            color: Blue;
            font-weight: 600;
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

                    <li class="active">
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
                        <a class="navbar-brand" href="addproduct.php">Users</a>
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

            <div class="box">
            <h4><b>All user feedback </b></h4><hr>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-danger"><b>No.</b></th>
                            <th class="text-danger"><b>FEEDBACK</b></th>
                            <th class="text-danger"><b>NAME</b></th>
                            <th class="text-danger"><b>ORDER NUMBER</b></th>
                            <th class="text-danger"><b>EMAIL</b></th>
                            <th class="text-danger"><b>CONTACT</b></th>
                            <th class="text-danger"><b>SHIPPING ADDRESS</b></th>
                            <th class="text-danger"><b>BILLING ADDRESS</b></th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'feedback_code.php' ?>
                    </tbody>

                </table>

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
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

</html>