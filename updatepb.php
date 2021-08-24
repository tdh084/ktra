<?php
	require_once ('./db/dbhelper.php');
    session_start();
     $check = "select trangthai from user where taikhoan = '".$_SESSION['username']."'" ;

 	$check = select_one($check);
 	if ($check != null) {
 		$status = $check['trangthai'];
 	}
    if (!isset($_SESSION["username"]) || $status == 0 )
        {     header("Location:index.php");
            // header("Location:index.php");
        }

$id = $name  = $sp =  $mt =  $dc = $dv = $em = $ws = $id_dv = '';
if (!empty($_POST)) {
	if (isset($_POST['taikhoan'])) {
		$name = $_POST['taikhoan'];

	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];

	}

	if (isset($_POST['sophong'])) {
		$sp = $_POST['sophong'];
	}
	if (isset($_POST['maytruc'])) {
		$mt = $_POST['maytruc'];
	}
	if (isset($_POST['diachi'])) {
		$dc = $_POST['diachi'];
	}
	
	if (isset($_POST['email'])) {
		$em = $_POST['email'];
	}
	if (isset($_POST['website'])) {
		$ws = $_POST['website'];
	}
	if (isset($_POST['donvi'])) {
		$dv = $_POST['donvi'];
	}

	if (!empty($name)) {
		if ($id == '') {
			
		$sql = 'insert into donvi(name, sophong, maytruc, diachi, email, website ,id_parent) values("'.$name.'","'.$sp.'", "'.$mt.'", "'.$dc.'", "'.$em.'", "'.$ws.'", "'.$dv.'" )';
				
			
		}
		 else {
		$sql = 'update donvi set name = "'.$name.'", sophong = "'.$sp.'", maytruc = "'.$mt.'", diachi = "'.$dc.'", email = "'.$em.'", website = "'.$ws.'", id_parent = "'.$dv.'" where id = '.$id;}
			 select($sql);
			 //print($sql);
			//exit();
			header('Location: adminpb.php');
			die();
		

		
	}
}

if (isset($_GET['id'])) {
	$id       = $_GET['id']; 
	$sql      = 'select * from donvi where id = '.$id;
	$login = select_one($sql);
	if ($login != null) {
		$name 	  = $login['name'];
		$sp	  = $login['sophong'];
		$mt	  = $login['maytruc'];
		$dc	  = $login['diachi'];
		$em	  = $login['email'];
		$ws 	  = $login['website'];	
		$id_dv =$login['id_parent'];
		$donvi = "select name from donvi where id = " .$id_dv;
		$val_donvi = select_one($donvi);
		if ($val_donvi != null) {
				$dv = $val_donvi['name'];
		}
		

	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Thêm Phòng Ban</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/ico" href="../icon/logo.ico">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body >
	<ul class="nav nav-tabs">
	  
	  <li class="nav-item">
	    <a class="nav-link" style="color:red;" href="admin.php">ADMIN</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" style="color:#ccc" href="logout.php">Đăng xuất</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Cập nhật thông tin</h2>
			</div>
			<div class="panel-body" >
				<form method="post" style = "width: 100% ;margin-top:3%;">
					<div class="form-group">
					  <label  for="taikhoan">Tên :</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">

					  <input required="true" type="text" class="form-control" id="taikhoan" name="taikhoan" 
					  value="<?=$name?>" >

					</div>

					<div class="form-group">
					  <label  for="matkhau">Số Phòng:</label>
					  
					  <input required="true" type="text" class="form-control" id="matkhau" name="sophong" value="<?=$sp?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Điện Thoại Cơ Quan:</label>
					  
					  <input required="true" type="text" class="form-control" id="matkhau" name="maytruc" value="<?=$mt?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Địa Chỉ:</label>
					  
					  <input required="true" type="text" class="form-control" id="matkhau" name="diachi" value="<?=$dc?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Email:</label>
					  
					  <input  required="true" type="text" class="form-control" id="matkhau" name="email" value="<?=$em?>" >
					</div>
					<div class="form-group">
					  <label  for="matkhau">Website:</label>
					  
					  <input  required="true" type="text" class="form-control" id="matkhau" name="website" value="<?=$ws?>" >
					</div>
					
					<div class="form-group">
					  <label  for="matkhau">Đơn Vị</label>
					  
					  <select style="text-align:center;font-size : 20px;" required="true" type="text" class="form-control" id="matkhau" name="donvi" value="<?=$dv?>" >

					  	<option value="<?=$id_dv?>"><?=$id_dv?></option>
					  	<?php 

					  		$sql = "select * from donvi " ;
					  		$variable = select_list($sql);
					  		foreach ($variable as  $value) { ?>
					  				
					  		<option value="<?=$value['id']?>"><?=$value['name']?></option>

					  	<?php } ?>

					  </select>
					</div>

					
			
					<button style="width: 100%; font-size:20px" class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>