
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="css/product.css">
    
   

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
    <style>
         body {
                    margin: 0;
                    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                    font-size: .8125rem;
                    font-weight: 400;
                    line-height: 1.5385;
                    color: #333;
                    text-align: left;
                    background-color: rgb(12,12,12,12);
              }
        .image{
            text-align: center;
        }
    </style>
</head>


<body>


<div class="container-fluid ">
            <div class="nav">
                    <a href="home.html">
                    <img src="image/playtech.png" class="logo">
                    </a>
                    
                    <ul>

                        <li>
                            <li><a href="cart.php"><i class="bi bi-cart-check-fill"></i><span id="cart-item" class="badge badge-danger"></span></a></li>
                        </li>
                        <li><a href="product_1.php">Product</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="home.html">Logout</a></li>
                   
                    </ul>
            </div>
</div>

<div class="container-fluid p-3 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-person-lines-fill"> </i>My Profile</h5>
</div>

<div class="container-fluid">
        <div class="row d-flex justify-content-center mt-50 mb-50">
          <div class="col-lg-5">
            <div class="form-group">
                        <?php
                            @include 'connection.php';
                            $eml= $_POST['email'];
                            $qry="SELECT * FROM user WHERE email= '$eml' ";
                            $result=mysqli_query($conn,$qry);
                            if(mysqli_num_rows($result)==0){
                                header('location:login.php');
                        
                            }
                            while($row=mysqli_fetch_array($result)){

                            ?>
                            <div class="card border-danger bg-transparent text-center" style="width: 40rem;"><br>
                            <div class="image"><img src="image/profile.png" alt="" height="130px" width="130px" ></div><br>
                            <label class="card-title font-weight-semibold text-light" for="email"><h2 class="text-center  text-danger">Welcome <?php echo $row['name']; ?></h2></label>
                            <div class="card-body text-left">
                            <label class="info-title font-weight-semibold text-light text-left" for="email"><h4 class="text-center">Contact Number: <?php echo $row['contact']; ?></h4></label><br>
                            <label class="info-title font-weight-semibold text-light" for="email"><h4 >Email: <?php echo $row['email']; ?></h4></label><br>
                            <label class="info-title font-weight-semibold text-light" for="email"><h4 >shipping Address: <?php echo $row['shipping_address']; ?></h4></label><br>
                            <label class="info-title font-weight-semibold text-light" for="email"><h4 >Billing Address: <?php echo $row['billing_address']; ?></h4></label><br>
                            <label class="info-title font-weight-semibold text-light" for="email"><h4 >Registration Date: <?php echo $row['regi_date']; ?></h4></label><br>
                            </div>
                            </div>

                                
                                
                            <?php
                            }
                        ?>
                    
                    
            </div>

          </div>
        </div>
        <form action="#" method="POST">
                                
                                <tr>
                                <input type="hidden" value="<?php echo $row['email'];?>" name="email" >
                                </tr>
                                <div class="container  text-red text-center">
                                    <h5 class="mb-0 font-weight-bold text-danger "> <i class="bi bi-person-lines-fill"> </i>My Order History</h5>
                                </div>

                                <div class="container-fluid">
                                <div class="row  d-flex justify-content-center mt-50 mb-50">
                                    <div class="col-lg-10">
                                    <div class="table-responsive mt-2">
                                        <table class="table table-bordered table-striped table-dark text-center text-light">
                                            <thead>
                                                <tr>
                                                    <td>Order Number &nbsp &nbsp </td>
                                                    <td>Order Date &nbsp &nbsp </td>
                                                    <td>Name &nbsp &nbsp</td>
                                                    <td>Email &nbsp &nbsp &nbsp &nbsp &nbsp</td>
                                                    <td>Contact  &nbsp &nbsp &nbsp &nbsp</td>
                                                    <td>Address &nbsp &nbsp &nbsp</td>
                                                    <td>Product &nbsp &nbsp &nbsp</td>
                                                    <td>Total Amount &nbsp &nbsp &nbsp</td>
                                                    <td>Payment Method &nbsp &nbsp &nbsp</td>
                                                    <td>Payment Status &nbsp &nbsp &nbsp</td>
                                                    <td>Status</td>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                    @include 'connection.php';
                                                    $eml= $_POST['email'];
                                                    $qry="SELECT * FROM orders WHERE email= '$eml'";
                                                    $result=mysqli_query($conn,$qry);
                                                    while($row=mysqli_fetch_array($result)){

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['number']; ?></td>
                                                        <td><?php echo $row['order_date']; ?></td>
                                                        <td><?php echo $row['user_Name']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['product']; ?></td>
                                                        <td><?php echo $row['total_Amount']; ?></td>
                                                        <td><?php echo $row['payment_method']; ?></td>
                                                        <td><?php echo $row['payment_status']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                        
                                                        </tr>
                                                        
                                                    <?php
                                                    }
                                                ?>
                                                
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </form>
</div>


<div class="container">
    <div class="row d-flex justify-content-center mt-50 mb-50">
         <div class="container  text-red text-center">
            <h5 class="mb-0 font-weight-bold text-danger "> <i class="bi bi-person-lines-fill"> </i>Leave A Feedback/Report Issue</h5>
            <br>
        </div>
    <div class="col-md-12">
    <div class="card bg-danger">
      <div class="card-body">
        <br>
        <form action="#" method="post" enctype="multipart/form-data">
             
             <?php
              $conn = mysqli_connect("localhost","root","","playtech");
              $eml= $_POST['email'];
              $qry="SELECT * FROM user WHERE email= '$eml' ";
              $result=mysqli_query($conn,$qry);

                 
                 while($rx=mysqli_fetch_assoc($result)){
                     
                     $name = $rx['name'];
                     $email = $rx['email'];
                     $contact = $rx['contact'];
                     $ship = $rx['shipping_address'];
                     $bill = $rx['billing_address'];
                     
                
             ?>

                             <div class="form-row text-left text-light">
                             <div class="form-group col-md-4">
                                <label for="inputEmail4"><h5 class=" mb-0 font-weight-semibold ">Name:</h5></label>
                                <input type="text" class="form-control" name="name" value="<?php echo $name; ?> " required="required">
                             </div>
                             <div class="form-group col-md-4">
                             <label for="inputPassword4"><h5 class=" mb-0 font-weight-semibold ">Email:</h5></label>
                             <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" required="required">
                             </div>
                             <div class="form-group col-md-4">
                             <label for="inputPassword4"><h5 class=" mb-0 font-weight-semibold ">Contact Number:</h5></label>
                             <input type="number" class="form-control" name="contact" value="<?php echo $contact; ?>" required="required">
                             </div>
                             </div>

                             <div class="form-row text-left text-light">
                             <div class="form-group col-md-6">
                                <label for="inputAddress"><h5 class=" mb-0 font-weight-semibold ">Shipping Address:</h5></label>
                                <input type="text" class="form-control" name="ship" value="<?php echo $ship; ?>"required="required">
                             </div>
                             <div class="form-group col-md-6">
                                <label for="inputAddress"><h5 class=" mb-0 font-weight-semibold ">Billing Address:</h5></label>
                                <input type="text" class="form-control" name="bill" value="<?php echo $bill; ?>" required="required">
                             </div>
                             </div>

                             <div class="form-row text-left text-light">
                             <div class="form-group col-md-4">
                                <label for="inputAddress"><h5 class=" mb-0 font-weight-semibold ">Enter Your Order Number:</h5></label>
                                <input type="text" class="form-control" name="orderNo" required="required">
                             </div>
                             <div class="form-group col-md-8">
                                <label for="inputAddress"><h5 class=" mb-0 font-weight-semibold ">Give Us Your Feedback:</h5></label>
                                <textarea name="feedback" class="form-control form-control-sm font-weight-bold text-dark" rows="6" cols="10" ></textarea required="required">
                               
                             </div>
                             </div>
                            <br>
                             <div class="col-md-12">
                             <button type="submit" class="btn btn-warning btn-block" value="submit" name="sub-btn">
                                <h5 class=" mb-0 font-weight-semibold ">Submit</h5>
                             </button>
                             </div>
                             
                  
             
                  <?php   } ?>
 
                  <?php
                  if(isset($_POST['sub-btn'])){
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     $contact = $_POST['contact'];
                     $ship = $_POST['ship'];
                     $bill = $_POST['bill'];
                     $orderno = $_POST['orderNo'];
                     $feedback = $_POST['feedback'];
                    
 
                     $query = "INSERT INTO feedback (feedback,user_name,order_number,email,contact,shipping_address,billing_address) VALUES('$feedback', '$name','$orderno','$email','$contact','$ship','$bill')";
                     $updatequery= mysqli_query($conn,$query);
 
                     if($updatequery){   
                     
                         echo "Updated !";
                        
                         
                     }
                     
                  }
                  ?>
          </form>
            
        <br>
      </div>
    </div>
  </div>
    </div>
</div>
</body>
</html>


