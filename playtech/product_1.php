<!DOCTYPE html>
<html lang="en">

<head>
    <title>product</title>
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
                        <li><a href="Admin/adminlog.php">Admin Login</a></li>
                        <li><a href="login.php">My Profile</a></li>
                   
                    </ul>
            </div>
</div>

<div class="container-fluid p-3 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-bag-heart-fill"> </i>All Products</h5>
</div>

<div class="container-fluid   text-white">
    <marquee class="font-weight-semibold"><h6>!! Click "Add to Cart" button to place order !! </h6> </marquee>
    
</div>

<div class="content ">
    <div class="container text-center">
<div class="row">
  <div class="col-md-8">
    <div class="card bg-danger">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <br>
        <h2 class="text-left mb-0 font-weight-semibold text-light ">we count the COMPONENTS</h2>
        <h1 class="text-left mb-0 font-weight-semibold text-light">based on your BUDGET !!</h1><br>
        <h5 class="text-left mb-0 font-weight-semibold text-light ">Let us help you count the components and </h5>
        <h5 class="text-left mb-0 font-weight-semibold text-light ">build your dream pc without breaking the bank.</h5><br><br>
        <a href="suggest_amount.php" class="btn btn-warning btn-block">
            <h5 class=" mb-0 font-weight-semibold ">Let's get started</h5>
        </a>
        <br>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card bg-transparent border-danger ">
              <br><br>
        <div class="image"><img src="image/budgetpic.png" alt="" height="220px" width="220px" ></div>
      <br>
      <a href="suggest.php" class="btn btn-danger btn-sm">
            <h5 class=" font-weight-semibold ">Search <i class="bi bi-search-heart"></i></h5>
        </a>
        
    </div>
    
  </div>
</div>
</div>
</div>


<div class="container">

    <div class="container d-flex justify-content-center mt-50 mb-50">
   
            
        <div class="row">
        <?php
  			$conn = mysqli_connect("localhost","root","","playtech");
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
           <div class="col-md-3 mt-4">
           <div class="card-deck">
                <div class="card border-danger bg-transparent">
                      
       
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="upload/<?php echo $row["image"]; ?>" class="card-img img-fluid" width="96" height="120" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body border-danger bg-transparent text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="#" class="text-light mb-2" data-abc="true"><?php echo $row["name"]; ?></a>
                                            </h6>

                                            <a href="#" class="text-muted" data-abc="true"><?php echo $row["catagory"]; ?></a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold text-light"><?php echo $row["price"]; ?> BDT</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                       <br>

                                      <!--   hidden details about product -->
                                      <form action="" class="form-submit">
                                        <input type="hidden" class="code" value="<?= $row['code'] ?>">
                                        <input type="hidden" class="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" class="model" value="<?= $row['model'] ?>">
                                        <input type="hidden" class="description" value="<?= $row['description'] ?>">
                                        <input type="hidden" class="restock" value="<?= $row['restock'] ?>">
                                        <input type="hidden" class="price" value="<?= $row['price'] ?>">
                                        <input type="hidden" class="status" value="<?= $row['status'] ?>">
                                        <input type="hidden" class="quantity" value="<?= $row['quantity'] ?>">
                                        <input type="hidden" class="catagory" value="<?= $row['catagory'] ?>">
                                        <input type="hidden" class="image" value="<?= $row['image'] ?>">


                                        <button type="button" class="btn btn-warning bg-cart addItemBtn"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                                      </form>
                                        
                                    </div>
                                </div>
           </div>
                  
           </div> 

           <?php endwhile; ?>


        </div>
        
    </div>

</div>

                        <!-- Displaying Products End -->

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

                    <script type="text/javascript">
                    $(document).ready(function() {

                        // Send product details in the server
                        $(".addItemBtn").click(function(e) {
                        e.preventDefault();
                        var $form = $(this).closest(".form-submit");
                        var code = $form.find(".code").val();
                        var name = $form.find(".name").val();
                        var model = $form.find(".model").val();
                        var description = $form.find(".description").val();
                        var restock = $form.find(".restock").val();
                        var price = $form.find(".price").val();
                        var status = $form.find(".status").val();
                        var quantity = $form.find(".quantity").val();
                        var catagory = $form.find(".catagory").val();
                        var image = $form.find(".image").val();

                        $.ajax({
                            url: 'action.php',
                            method: 'post',
                            data: {
                            code: code,
                            name: name,
                            model: model,
                            description: description,
                            restock: restock,
                            price: price,
                            status: status,
                            quantity: quantity,
                            catagory: catagory,
                            image: image
                            },
                            success: function(response) {
                            $("#message").html(response);
                            window.scrollTo(0, 0);
                            load_cart_item_number();
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