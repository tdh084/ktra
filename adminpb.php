

<?php
require_once ('db/dbhelper.php');
  session_start();
    $check = "select trangthai from user where taikhoan = '".$_SESSION['username']."'" ;

  $check = select_one($check);
  if ($check != null) {
    $status = $check['trangthai'];
  }
    if (!isset($_SESSION["username"]) || $status == 0 )
        {    
          header("Location:../../index.php");
            // header("Location:index.php");
        }
$sql = "select * from donvi ";
$datas = select_list($sql);

$stt=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL="SHORTCUT ICON" HREF="./images/counterstrike4.ico">
        <title>Phòng Ban</title>
        <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
   <header>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
        <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="admin.php">Cán bộ</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link disable" href="#">Phòng ban</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminmb.php">Member</a>
    </li>
  </ul>
</nav>
        </header>
	<div class="container">
  <h2>Phòng Ban</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  
  <a href="logout.php">
  	<button type="button"><i class="fas fa-home"></i> Đăng xuất</button>
  </a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
      	<th>stt</th>
        <th>name</th>
        <th>sophong-diachi</th>
        <th>website</th>
        <th>maytruc</th>
        <th><a href="addpb.php"><button type="button">Thêm</button></a></th>
      </tr>
    </thead>
    <?php foreach($datas as $data){ ?>
     
    <tbody id="myTable">

      <tr>
      	<td><?php echo $stt+=1?></td>
     <td><b><?php echo $data["name"];?></b></td>
        <td><?php echo $data["sophong"].'-'.$data["diachi"];?></td>
        <td><?php echo $data["website"];?></td>
        <td><?php echo "02".$data["maytruc"];?></td>

        <td><br><br><a href="updatepb.php?id=<?php echo $data['id'] ;?>"><button type="button">Sửa</button></a> <a href="delete.php?id=<?php echo $data['id'];?>"> <button onclick="testConfirmDialog()" type="button">Xóa</button></a></td>
        <td></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><strong>1</strong></a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</div>
	
	<script type="text/javascript">
 
         function testConfirmDialog()  {
 
              var result = confirm("Bạn có thật sự muốn xoá?");
 
              if(result)  {
                  alert("Xoá thành công!");
              } else {
                 
              }
         }
 
      </script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>