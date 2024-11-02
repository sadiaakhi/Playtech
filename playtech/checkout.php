<?php
	$conn = mysqli_connect("localhost","root","","playtech");

	$total_Amount = 0;
	$allItems = '';
	$items = [];


	$sql = "SELECT CONCAT(name , '-', model, ' ', price , 'BDT ', 'X' ,quantity, ' ') AS ItemQty,  total FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $total_Amount += $row['total'];
	  $items[] = $row['ItemQty'];
    
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout</title>
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
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-credit-card-2-back-fill"> </i>Checkout </h5>
</div>

<div class="body-content outer-top-bd">
    <div class="container mt-50">
        <div class="row justify-content-around">

            <div class="col-md-6 col-sm-6">
              <h3 class="checkout-subtitle font-weight-semibold text-warning">Your Products :</h3>
                <br>
                  <div class="table">

                    <table class="table table-bordered table-striped table-dark text-center text-light">
                      <thead>
                        <tr>
                        </tr>
                        <tr>
                          <th>Image</th>
                          <th>NAME</th>
                          <th>MODEL</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total Amount</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                          $conn = mysqli_connect("localhost","root","","playtech");
                          $stmt = $conn->prepare('SELECT * FROM cart');
                          $stmt->execute();
                          $result = $stmt->get_result();
                          $grand_total = 0;
                          while ($row = $result->fetch_assoc()):
                        ?>
                        <tr>

                          <td><img src="upload/<?= $row['image'] ?>" width="50"></td>

                          <td><?= $row['name'] ?></td>

                          <td><?= $row['model'] ?></td>

                          <td>
                          &nbsp;&nbsp;<?= number_format($row['price'],2); ?>
                          </td>
                          <input type="hidden" class="price" value="<?= $row['price'] ?>">

                          <td>
                            <input type="number" class="form-control itemQty" value="<?= $row['quantity'] ?>">
                          </td>

                          <td>&nbsp;&nbsp;<?= number_format($row['total'],2); ?> BDT</td>

                          

                        </tr>

                        <?php $grand_total += $row['total']; ?>
                        <?php endwhile; ?>

                        <tr>
                          <td colspan="3">
                            <a href="cart.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Back To Caer</a>
                          </td>
                          <td colspan="2"><b>Grand Total</b></td>
                          <td><b>&nbsp;&nbsp;<?= number_format($grand_total,2); ?> BDT</b></td>
                          
                        </tr>

                      </tbody>
                    </table>
                  </div>
            </div>
              <!-- End of MINI Cart -->

              <div class="col-md-5 col-sm-5">

              <h3 class="checkout-subtitle font-weight-semibold text-warning">Enter Details To Place Order :</h3><br>
                

                <form action="action.php" method="POST" id="order">

                  <input type="hidden" name="products" value="<?= $allItems; ?>">
                  <input type="hidden" name="grand_total" value="<?= $total_Amount; ?>">

                  <div class="form-group">
                    <label class="info-title font-weight-semibold text-light text-left" for="name"> <h5>Enter Name </h5></label>
                    <input type="text" name="name" class="form-control form-control-sm font-weight-bold text-dark"  required>
                  </div>
                  <div class="form-group">
                  <label class="info-title font-weight-semibold text-light" for="email"> <h5>Enter Email </h5></label>
                    <input type="email" name="email" class="form-control form-control-sm font-weight-bold text-dark"  required>
                  </div>
                  <div class="form-group">
                  <label class="info-title font-weight-semibold text-light" for="contact"> <h5>Enter Contact Number </h5></label>
                    <input type="tel" name="contact" class="form-control form-control-sm font-weight-bold text-dark"  required>
                  </div>
                  <div class="form-group">
                  <label class="info-title font-weight-semibold text-light" for="address"> <h5>Enter Shipping Address </h5></label>
                    <textarea name="address" class="form-control form-control-sm font-weight-bold text-dark" rows="3" cols="10" ></textarea>
                  </div>
                  <label class="info-title font-weight-semibold text-light" for="payment"> <h5>Select Payment Option </h5></label>
                  <div class="form-group">
                    <select name="payment" class="form-control form-control-sm font-weight-bold text-dark">
                      <option value="" selected disabled>-Select Payment -</option>
                      <option value="cod">Cash On Delivery (COD)</option>
                      <option value="netbanking">Bkash</option>
                      <option value="cards">Nagad</option>
                      <option value="cards">Bank</option>
                    </select>
                  </div>
                  <div class="form-group">
                     <input type="hidden" name="date" class="form-control form-control-sm font-weight-bold text-dark" value="<?php echo date('Y-m-d'); ?>" />
                  </div>
                  <div class="form-group">
                  
                    <input type="submit" name="order" value="Place Order" class="btn btn-danger btn-block">
                  </div>
                </form>
              </div>    
             

        </div>
    </div>
</div>










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