<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
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
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-bag-heart-fill"> </i>Search Products</h5>
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


<div class="container mt-50">
    <h2 >Search the product you want to find that suits your budget</h2><br>
        <div class="row justify-content-center">
          <div class="col-4">
        
          <form method="post" action="budget.php" >
                  <div class="form-group text-left">
                      <label class="info-title font-weight-semibold text-light" for="price"> <h5>Enter Amount :</h5></label>
                      <input type="price" name="price" id="textfield2" class="form-control form-control-sm font-weight-bold text-dark">
                  </div> 
                    
                  <div class="form-group text-left">
                    <label class="info-title font-weight-semibold text-light" for="catagory"> <h5>Catagory :</h5></label>
                      <select id="inputState" class="form-control" name="catagory">
                          <option selected>Processor</option>
                          <option>Storage</option>
                          <option>Graphic Card</option>
                          <option>RAM/ROM</option>
                          <option>Motherboard
                              
                          </option>
                      </select>
                      
                  </div> 
                <br>
                <br>
                  <div class="form-group"> 
              
                      <input type="submit" name="button" id="button" value="Submit" class="btn btn-danger btn-block"/><br>
                      <h6 class="checkout-subtitle font-weight-semibold text-warning"> <a href="product_1.php">Go back</a></h6>
                  </div>      
              </form>

          </div>
        </div>
    </div>
    </div>

</div>

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>   
</body>
 
</html>
