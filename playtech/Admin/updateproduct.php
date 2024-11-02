<!doctype html>
<html lang="en">
  <head>
    <title>Update Product</title>
    <title>Add product</title>
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
    
                    <li class="active">
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
                    <a class="navbar-brand" href="addproduct.php">Edit Product</a>
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
        <a href="Edit_product.php"> Go Back</a>
    </div>
    <div class="box">
        <h4><b> Update product details </b></h4><hr>
    

         <form action="#" method="post" enctype="multipart/form-data">
             
            <?php
             $conn = mysqli_connect("localhost","root","","playtech");
    
             if(isset($_GET['id'])){
                $pid =$_GET['id'];
                $query = "SELECT * FROM product WHERE code=$pid";
                $getdata = mysqli_query($conn,$query);
                
                while($rx=mysqli_fetch_assoc($getdata)){
                    $name = $rx['name'];
                    $model = $rx['model'];
                    $description = $rx['description'];
                    $restock = $rx['restock'];
                    $price = $rx['price'];
                    $status = $rx['status'];
                    $quantity = $rx['quantity'];
                    $catagory = $rx['catagory'];
                    $image = $rx['image'];
               
            ?>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Product Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Model/Version</label>
                            <input type="text" class="form-control" name="model" value="<?php echo $model; ?>">
                            </div>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="inputAddress">Product Description</label>
                            <input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
                            </div>
                            <div class="form-group col-md-12">
                            <label for="inputAddress2">Restock</label>
                            <input type="date" class="form-control" name="restock" value="<?php echo $restock; ?>">
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">Price</label>
                            <input type="number" class="form-control" name="price" value="<?php echo $price; ?>">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select type="inputState" class="form-control" name="status" value="<?php echo $status; ?>">
                                <option selected>Available</option>
                                <option>Not Available</option>
                                <option>Shipment Pending </option>
                            </select>
                            </div>
                            <div class="form-group col-md-2">
                            <label for="inputZip">Quantity</label>
                            <input type="number" class="form-control"  name="quantity" value="<?php echo $quantity; ?>">
                            </div> 
                            </div>  
                            <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputState">Catagory</label>
                            <select id="inputState" class="form-control" name="catagory" value="<?php echo $catagory; ?>">
                                    <option selected>Processor</option>
                                    <option>Storage</option>
                                    <option>Graphic Card</option>
                                    <option>RAM/ROM</option>
                                    <option>Motherboard</option>
                                    <option>Cooler</option>
                                    <option>Graphics card</option>
                                    <option>Keyboard</option>
                                    <option>Mouse</option>
                            </select>
                            </div>    
                            <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1">Image</label>
                            <input type="file" class="form-control-file" name="image" value="<?php echo $image; ?>">
                            </div>
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary col-md-1" value="Update Product" name="up-btn">Update</button>
                            </div>
                            
                 
            
                 <?php   }} ?>

                 <?php
                 if(isset($_POST['up-btn'])){
                    $name = $_POST['name'];
                    $model = $_POST['model'];
                    $description = $_POST['description'];
                    $restock = $_POST['restock'];
                    $price = $_POST['price'];
                    $status = $_POST['status'];
                    $quantity = $_POST['quantity'];
                    $catagory = $_POST['catagory'];
                    
                    if($_FILES["image"]["error"] == 4){
                        echo
                        "<script> alert('Image Does Not Exist'); </script>"
                        ;
                      }
                      else{
                        $fileName = $_FILES["image"]["name"];
                        $fileSize = $_FILES["image"]["size"];
                        $tmpName = $_FILES["image"]["tmp_name"];
                    
                        $validImageExtension = ['jpg', 'jpeg', 'png'];
                        $imageExtension = explode('.', $fileName);
                        $imageExtension = strtolower(end($imageExtension));
                        if ( !in_array($imageExtension, $validImageExtension) ){
                          echo
                          "
                          <script>
                            alert('Invalid Image Extension');
                          </script>
                          ";
                        }
                        else if($fileSize > 1000000){
                          echo
                          "
                          <script>
                            alert('Image Size Is Too Large');
                          </script>
                          ";
                        }
                        else{
                          $newImageName = uniqid();
                          $newImageName .= '.' . $imageExtension;
                    
                          move_uploaded_file($tmpName, '../upload/' . $newImageName);

                        $query = "UPDATE product SET name='$name', model='$model', description='$description', restock='$restock', price='$price', status='$status', quantity='$quantity', catagory='$catagory', image='$newImageName' WHERE code=$pid";
                        $updatequery= mysqli_query($conn,$query);

                        echo "Product Updated !";
                        echo
                        "
                        <script>
                        alert('Successfully Added');
                        document.location.href = 'Edit_product.php';
                        </script>
                        ";
                    }
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
