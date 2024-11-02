<?php  

    $con = mysqli_connect('localhost','root','','playtech');
    

  if(isset($_POST['name'])){

    $user = $_POST['name'];
    $password = $_POST['pass'];
    $sql="select username, password from admin where username='$user' and password='$password'";
    $result= mysqli_query($con,$sql);
    

    if(mysqli_num_rows($result)==1){
        
        echo "Login Successfull";
        header("Location:dashboard.html");
        
    }
    else{
        echo "Login Failed";
    }

  }
?>