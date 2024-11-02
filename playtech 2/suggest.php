<!DOCTYPE html>
<html lang="en">

<head>
    <title>Suggest</title>
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
                        <li><a href="suggest.php">Suggest</a></li>
                        <li><a href="Admin/adminlog.php">Admin Login</a></li>
                        <li><a href="login.php">My Profile</a></li>                
                    </ul>
            </div>
</div>
<div class="container-fluid p-3 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-bag-heart-fill"> </i>Suggest Products</h5>
</div>
<div class="container">
    <div class="container d-flex justify-content-center mt-50 mb-50">
  
    

<style>
  h2 {
    text-align: center;
    color: #ffff00;}

  input[type="price"] {
    font-size: 20px;
    width: 300px;
    color: black; }

  label {
    font-size: 27px;
    color: #fff;}

  input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    font-size: 20px;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;}
  
  input[type="submit"]:hover {
    background-color: #3e8e41;}

</style>

<div class="text-center">
  <h2 style="margin-top: 50px;">Enter the amount in which you want to find the parts</h2>
  <form method="post" action="budget.php" style="margin-top: 50px;">
    <label>Search:
      <input type="price" name="price" id="textfield2" />
    </label><br><br>
    <label>
      <input type="submit" name="button" id="button" value="Submit" />
    </label>
  </form>
</div>
    </div>

</div>

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>   
</body>
 
</html>