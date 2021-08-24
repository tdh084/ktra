<?php 
session_start();

?>
 <!DOCTYPE html>
<html>
<head>
          <title>Login as ADMIN</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="stylelogin.css">

</head>

<body>

  <form class="modal-content animate" action="login_submit.php" method="post">
    <div class="imgcontainer">

     <!--  <img src="../image/login.png" alt="Avatar" class="avatar"> -->
    </div>

    <div class="container">
      <label for="taikhoan"><b>Username</b></label>
      
      <input type="text" placeholder="Enter Username" name="taikhoan" required>

      <label for="matkhau"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="matkhau" required>
        
      <button type="submit" style="width: 200px;background-color: green;" name="submit">Login</button>
      <button style="background-color:red;"><a href="../index.php" style="color:white;text-decoration: none;">Cancel</a></button>
    </div>

    

    </div>
  </form>
</div>


</body>
</html>


