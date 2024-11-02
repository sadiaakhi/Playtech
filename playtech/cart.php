<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
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
                            <li><a href="#home"><i class="bi bi-cart-check-fill"></i><span id="cart-item" class="badge badge-danger"></span></a></li>
                        </li>
                        <li><a href="product_1.php">Product</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="Admin/adminlog.php">Admin Login</a></li>
                        <li><a href="login.php">My Profile</a></li>
                   
                    </ul>
            </div>
</div>

<div class="container-fluid p-3 mb-2 bg-danger text-white text-center">
    <h5 class="mb-0 font-weight-semibold text-light "> <i class="bi bi-bag-heart-fill"> </i>Cart </h5>
</div>


  <div class="container-fluid">

    <div class="row  d-flex justify-content-center mt-50 mb-50">

      <div class="col-lg-10">

            <!--  <div style="display:<?php if (isset($_SESSION['showAlert'])) {
                      echo $_SESSION['showAlert'];
                    } else {
                      echo 'none';
                    } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong><?php if (isset($_SESSION['message'])) {
                      echo $_SESSION['message'];
                    } unset($_SESSION['showAlert']); ?></strong>
              </div> -->

        <div class="table-responsive mt-2">

          <table class="table table-bordered table-striped table-dark text-center text-light">

            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text1">Products in your cart!</h4>
                </td>
              </tr>
              <tr>
                <th>CODE</th>
                <th>Image</th>
                <th>NAME</th>
                <th>MODEL</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp; Clear Cart</a>
                </th>
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
                <td><?= $row['code'] ?></td>
                <input type="hidden" class="code" value="<?= $row['code'] ?>">

                <td><img src="upload/<?= $row['image'] ?>" width="50"></td>

                <td><?= $row['name'] ?></td>

                <td><?= $row['model'] ?></td>

                <td>
                &nbsp;&nbsp;<?= number_format($row['price'],2); ?>
                </td>
                <input type="hidden" class="price" value="<?= $row['price'] ?>">

                <td>
                  <input type="number" class="form-control itemQty" value="<?= $row['quantity'] ?>" style="width:75px;">
                </td>

                <td>&nbsp;&nbsp;<?= number_format($row['total'],2); ?> BDT</td>

                <td>
                  <a href="action.php?remove=<?= $row['code'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>

              </tr>

              <?php $grand_total += $row['total']; ?>
              <?php endwhile; ?>

              <tr>
                <td colspan="3">
                  <a href="product_1.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b>&nbsp;&nbsp;<?= number_format($grand_total,2); ?> BDT</b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>

            </tbody>
          </table>
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




<div class="container">

    

</div>

                   

</body>


    
</html>