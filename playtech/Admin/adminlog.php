<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminlog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="bg">

    <div class="white-box">
        <div class="logo"><img src="../image/user.png" height="60px" width="60px"></div>
        <div class="login-head">
        
        <br>
            Admin Login
            <br>
        </div>
        
        <form action="admin_code.php" method="POST" class="form">
            
            <input type="text" name="name" class="input" placeholder="  User Name" required>
            <br>
            
            <input type="password" name="pass" class="input" placeholder="  Password" required>
        
            <button type="submit" name="btn" class="button" href="#"><p>Login</p></button>
        
        </form>
      

    </div>
    </div>
</body>
</html>