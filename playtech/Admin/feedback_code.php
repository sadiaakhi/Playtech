<?php
  

        $conn = mysqli_connect("localhost","root","","playtech");
            
        if(!$conn){
        die("connection failed");
        }
        
        $query="SELECT * FROM feedback";
        $result=mysqli_query($conn,$query);

        while($row=$result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td>".$row['Number']."</td>";
        echo "<td>".$row['feedback']."</td>";
        echo "<td>".$row['user_name']."</td>";
        echo "<td>".$row['order_number']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['contact']."</td>";
        echo "<td>".$row['shipping_address']."</td>";
        echo "<td>".$row['billing_address']."</td>";
        echo "</tr>";
        
        }
        $conn->close();    
     
?>