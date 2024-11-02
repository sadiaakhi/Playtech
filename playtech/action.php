<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","playtech");

	// Add products into the cart table
	if (isset($_POST['code'])) {
	  $code = $_POST['code'];
	  $name = $_POST['name'];
	  $model = $_POST['model'];
	  $description = $_POST['description'];
	  $restock = $_POST['restock'];
	  $price = $_POST['price'];
	  $status = $_POST['status'];
	  $quantity = $_POST['quantity'];
	  $catagory = $_POST['catagory'];
	  $image = $_POST['image'];
	  $total = $price * $quantity;

	  $stmt = $conn->prepare('SELECT code FROM cart WHERE code=?');
	  $stmt->bind_param('s',$code);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $pcode = $r['code'] ?? '';

	  if (!$pcode) {
	    $query = $conn->prepare('INSERT INTO `cart`(`code`, `name`, `model`, `description`, `restock`, `price`, `status`, `quantity`, `catagory`, `image`, `total`) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
	    $query->bind_param('sssssssssss',$code,$name,$model,$description,$restock,$price,$status,$quantity,$catagory,$image,$total);
	    $query->execute();

	    echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	  } else {
	    echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart!</strong>
						</div>';
	  }
	}

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	  $stmt = $conn->prepare('SELECT * FROM cart');
	  $stmt->execute();
	  $stmt->store_result();
	  $rows = $stmt->num_rows;

	  echo $rows;
	}

	// Remove single items from cart
	if (isset($_GET['remove'])) {
	  $code = $_GET['remove'];

	  $stmt = $conn->prepare('DELETE FROM cart WHERE code=?');
	  $stmt->bind_param('i',$code);
	  $stmt->execute();

	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'Item removed from the cart!';
	  header('location:cart.php');
	}

	// Remove all items at once from cart
	if (isset($_GET['clear'])) {
	  $stmt = $conn->prepare('DELETE FROM cart');
	  $stmt->execute();
	  $_SESSION['showAlert'] = 'block';
	  $_SESSION['message'] = 'All Item removed from the cart!';
	  header('location:cart.php');
	}

	// Set total price of the product in the cart table
	if (isset($_POST['qty'])) {
	  $qty = $_POST['qty'];
	  $pid = $_POST['pid'];
	  $pprice = $_POST['pprice'];

	  $tprice = $qty * $pprice;

	  $stmt = $conn->prepare('UPDATE cart SET quantity=?, total=? WHERE code=?');
	  $stmt->bind_param('isi',$qty,$tprice,$pid);
	  $stmt->execute();
	}

	// Checkout and save customer info in the orders table
	if (isset($_POST['order']) ) {
	  $user_Name = $_POST['name'];
	  $email = $_POST['email'];
	  $contact = $_POST['contact'];
	  $product = $_POST['products'];
	  $total_Amount = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $payment_method = $_POST['payment'];
	  $date = $_POST['date'];

	  $data = '';
	  $stmt = $conn->prepare('INSERT INTO orders(order_date,user_Name,email,contact,address,product,total_Amount,payment_method) VALUES(?,?,?,?,?,?,?,?)');
	  $stmt->bind_param('ssssssss',$date,$user_Name,$email,$contact,$address,$product,$total_Amount,$payment_method);
	  $stmt->execute();
	  $stmt2 = $conn->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $run=$stmt2->execute();
	  if($run){
		header('location:thanks.php');
	  }
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $product . '</h4>
								<h4>Your Name : ' . $user_Name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $contact . '</h4>
								<h4>Total Amount Paid : ' . number_format($total_Amount,2) . '</h4>
								<h4>Payment Mode : ' . $payment_method . '</h4>
						  </div>';
	  echo $data;
	}
?>