<?php
@include 'connection.php';
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $select = "SELECT * FROM user WHERE email='$email' and password='$pass'";
    //$_SESSION['$email']= mysqli_real_escape_string($conn, $_POST['email']);
    //echo $_SESSION['$email'];

    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        echo "sucess";

    }
    else{
        echo"try again";
    }
};
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>


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
                        <li><a href="Admin/adminlog.php">Admin Login</a></li>
                        <li><a href="login.php">My Profile</a></li>
                   
                    </ul>
            </div>
</div>

<div class="container-fluid p-3 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-person-lines-fill"> </i>Login Or Register here to view profile</h5>
</div>

  <center>
      
  
    <div class="container mt-50">
        <div class="row justify-content-center">
          <div class="col-4">
                <h1 class="checkout-subtitle font-weight-semibold text-warning"><i class="bi bi-person-square"></i></h1><br>
              <form action="details.php" method="post">
                  <div class="form-group text-left">
                      <label class="info-title font-weight-semibold text-light" for="email"> <h5>Email :</h5></label>
                      <input type="email" name="email"  class="form-control form-control-sm font-weight-bold text-dark">
                  </div> 
                    
                  <div class="form-group text-left">
                      <label class="info-title font-weight-semibold text-light" for="password"> <h5>Password :</h5></label>
                      <input type="password" name="password" class="form-control form-control-sm font-weight-bold text-dark">
                  </div> 
                <br>
                <br>
                  <div class="form-group"> 
                      <input type="submit" name="submit" value="Login" class="btn btn-danger btn-block"><br>
                      <h6 class="checkout-subtitle font-weight-semibold text-warning">Not yet a Member? <a href="register.php">Register</a></h6>
                  </div>      
              </form>

          </div>
        </div>
    </div>

  
  </center>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".code").val();
      var pprice = $el.find(".price").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

</body>
</html>