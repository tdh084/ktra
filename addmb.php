
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL="SHORTCUT ICON" HREF="./images/counterstrike4.ico">
        <title>Thêm sản phẩm</title>
        <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #eeeeee;">
	<div class="container">
	<h1>Thêm Tài Khoản</h1>
	<a href="admin.php">
  	<button type="button"><i class="fas fa-home"></i> Admin</button>
  </a><br>
<br>
<form action="xl_add.php" method="post">
	<br>

  	<b>Tài khoản: </b><input style="width: 400px;" type="text" name="taikhoan"><br>
  	<br>
  	<b>Mật khẩu: </b><input style="width: 400px;" type="text" name="matkhau"><br>
  	<br>
  	<b>Trạng thái: </b><input style="width: 400px;" type="bit" name="trangthai"><br>
  	<br>
    
	<input onclick="testAlertDialog()" style="background-color:#00ff00; width:150px;height: 50px;color: white;" type="submit" name ="add" value="Thêm">
</form>
</div>
<script type="text/javascript">
 
         function testAlertDialog()  {
 
              alert("Thêm thành công! Quay trở về trang QUẢN TRỊ!");
         }
 
      </script>
</body>

</html>