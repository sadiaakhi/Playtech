
<?php
     $conn = mysqli_connect("localhost","root","","playtech");
    
     if(!$conn){
        die("connection failed");
     }
      
     $query="SELECT * FROM user";
     $result=mysqli_query($conn,$query);

     while($row=$result->fetch_assoc()) {
      $password = $row['password'];
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['contact']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>". $hashed_password."</td>";
        echo "<td>".$row['shipping_address']."</td>";
        echo "<td>".$row['billing_address']."</td>";
        echo "<td>".$row['regi_date']."</td>";
        echo "</tr>";
      
     }
     $conn->close();
?>