<?php

    session_start();

     $conn = mysqli_connect("localhost","root","","playtech");
    
     if(!$conn){
        die("connection failed");
     }
      
     if(isset($_POST['save']))
     {
        $name = $_POST['name'];
        $model = $_POST['model'];
        $des = $_POST['description'];
        $restock = $_POST['restock'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image']['name'];

        $path="uploads";
        $image_ext= pathinfo($image, PATHINFO_EXTENSION);
        $filename=time().'.'.$image_ext;

        $query= "INSERT INTO product (name,model,description,restock,price,status,quantity,image)
        VALUES ('$name','$model','$des','$restock','$price','$status','$quantity','$image')";
        
        $run = mysqli_query($conn,$query);

        if($query)
        { 
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
            echo "New Product added !";
	        header('location:addproduct.php');
           
            
        }
        
     }
?>
