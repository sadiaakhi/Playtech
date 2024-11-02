<?php
     $conn = mysqli_connect("localhost","root","","playtech");
    
     if(!$conn){
        die("connection failed");
     }
      
     $query="SELECT * FROM orders";
     $result=mysqli_query($conn,$query);

     while($row=$result->fetch_assoc()) {
    
        echo "<tr>";
        echo "<td>".$row['number']."</td>";
        echo "<td>".$row['order_date']."</td>";
        echo "<td>".$row['user_Name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['contact']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['product']."</td>";
        echo "<td>".$row['total_Amount']."</td>";
        echo "<td>".$row['payment_method']."</td>";
        echo "<td>".$row['payment_status']."</td>";
        echo "<td>".$row['status']."</td>";
        echo '<td><a class="bi bi-arrow-repeat" href="update_order.php?id='.$row['number'].'" role="button">Update</a></td>';
        echo '<td><a class="bi bi-arrow-repeat" href="admin_order.php?id='.$row['number'].'" role="button">Delete</a></td>';
        echo "</tr>";
      }
      
     
     $conn->close();
?>