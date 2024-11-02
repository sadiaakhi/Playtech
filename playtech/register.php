<?php
@include 'connection.php';
if(isset($_POST['submitForAdd'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $shipping_address = mysqli_real_escape_string($conn, $_POST['shipping_address']);
    $billing_address = mysqli_real_escape_string($conn, $_POST['billing_address']);
    $regi_date = mysqli_real_escape_string($conn, $_POST['regi_date']);

    $insert= "INSERT INTO user(name,contact,email,password,shipping_address,billing_address,regi_date) VALUES('$name','$contact','$email','$password','$shipping_address','$billing_address', '$regi_date')";
    mysqli_query($conn, $insert);
    header('login.php');
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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
                        <li><a href="login.php">User Login</a></li>
                   
                    </ul>
            </div>
</div>

<div class="container-fluid p-2 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-person-lines-fill"> </i>Register Now</h5>
</div>
  <center>
  

  <div class="container mt-50">
        <div class="row justify-content-center">
          <div class="col-5">
                <h5 class="checkout-subtitle font-weight-semibold text-warning">Enter details to create an account </h5>
                      <form action="" method="post">
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="name"> <h6>Name</h6></label>
                      <input type="text" name="name" class="form-control form-control-sm font-weight-bold text-dark">
                      </div>
                      
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="contact"> <h6>Contact Number</h6></label>
                      <td><input type="text" name="contact" class="form-control form-control-sm font-weight-bold text-dark"></td>
                      </div>
                     
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="email"> <h6>Email </h6></label>
                      <input type="text" name="email" class="form-control form-control-sm font-weight-bold text-dark">
                      </div>
                      
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="password"> <h6>Password</h6></label>
                      <input type="password" name="password" class="form-control form-control-sm font-weight-bold text-dark">
                      </div>
                      
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="shipping_address"> <h6>shipping Address</h6></label>
                      <input type="text" name="shipping_address" class="form-control form-control-sm font-weight-bold text-dark">
                      </div>
                      
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="billing_address"> <h6>Billing Address</h6></label>
                      <input type="text" name="billing_address" class="form-control form-control-sm font-weight-bold text-dark">
                      </div>
                     
                      <div class="form-group text-left"> 
                      <label class="info-title font-weight-semibold text-light" for="regi_date"> <h6>Registration Date</h6></label>
                      <input type="text" name="regi_date" class="form-control form-control-sm font-weight-bold text-dark" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                      <br>
                      <div class="form-group"> 
                      <input type="submit" name="submitForAdd" class="btn btn-danger btn-block"><br>
                      <h6 class="checkout-subtitle font-weight-semibold text-warning">Already a user? <a href="login.php">Login Here</a></h6>
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

    // Change the item quantity
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

    // Load total no.of items added in the cart and display in the navbar
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





