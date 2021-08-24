<?php
	require_once ('../db/dbhelper.php');
	session_start();

	if (isset($_POST['submit']) && $_POST["taikhoan"] != '' && $_POST["matkhau"] != '') 
	{
			// $id_user    = $_POST["id"];
			$usrnm      = $_POST["taikhoan"];
			$password   = $_POST["matkhau"];
			$sql		= "select * from user where taikhoan ='$usrnm' and matkhau='$password' " ;
			$user = mysqli_query($con, $sql);
			// $data = mysqli_fetch_assoc($user); 

			if(mysqli_num_rows($user)>0){
				if($_POST["taikhoan"]=="admin" || "huy" ){	
					echo "<script>
						  window.location='http://localhost/ktra/admin.php';
					      </script>";
					$_SESSION["username"] = $usrnm;

					

				}
				else{
					$_SESSION["username"] = $usrnm;
					echo "<script>
					 alert('BSV');
					window.location='http://localhost/ktra/index.php';
					      </script>";
				
				header("Location: ../index.php");
				}
			}
			else{
				echo "<script>
					      alert('Nhập sai tên Tài Khoản hoặc Mật Khẩu');
						  window.location='http://localhost/ktra/Login/login.php';
					      </script>";
					    
			}

	}
	else
	{	
		echo "<script>
					      alert('Chưa nhập tài khoản mật khẩu');
						  window.location='http://localhost/ktra/Login/login.php';
					      </script>";
	}

?>