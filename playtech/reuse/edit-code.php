
<?php
     $conn = mysqli_connect("localhost","root","","playtech");
    
     if(!$conn){
        die("connection failed");
     }
      
     $query="SELECT * FROM product";
     $result=mysqli_query($conn,$query);

     while($row=$result->fetch_assoc()) {
      
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['model']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['restock']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td>".$row['quantity']."</td>";
        echo '<td>
         <img src="../uploads/ '.$row['image'].'" alt="'.$row['image'].'" width="20px" height="20px">
         </td>';
        echo '<td><a class="bi bi-arrow-repeat" href="updateproduct.php?id='.$row['code'].'" role="button">Update</a></td>';
        echo '<td><a class="bi bi-arrow-repeat" href="editproduct.php?id='.$row['code'].'" role="button">Delete</a></td>';
        echo "</tr>";  
      
     }
     $conn->close();
?>
