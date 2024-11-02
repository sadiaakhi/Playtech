<?php
     $conn = mysqli_connect("localhost","root","","playtech");

     function getAll($table)
     {
        global $conn;
        $query= "SELECT * FROM $table";
        return $runquery= mysqli_query($conn, $query);
     }

?>