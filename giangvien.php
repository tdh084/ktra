

<?php
require_once ('db/dbhelper.php');
  session_start();
    
$sql = "select * from canbo ";
$datas = select_list($sql);

$stt=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL="SHORTCUT ICON" HREF="./images/counterstrike4.ico">
        <title>Tra cứu</title>
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
      <a class="nav-link" href="index.php">Phòng ban</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="giangvien.php">Giảng viên</a>
    </li>
  </ul>
</nav>
        </header>
	<div class="container">
  <h2>Giảng viên</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  
  <a href="index.php">
  	<button type="button"><i class="fas fa-home"></i> Home</button>
  </a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
      	<th>stt</th>
        <th>name</th>
        <th>donvi</th>
        <th>sdt</th>
        <th>email</th>
      </tr>
    </thead>
    <?php foreach($datas as $data) {?>
    <tbody id="myTable">

      <tr>
      	<td><?php echo $stt+=1?></td>
     <td><a href="chitiet.php?id=<?php echo $data['id'];?>"><b><?php echo $data["name"];?></b></a></td>
        <td><?php echo $data["id_donvi"];?></td>
        <td><?php echo "+84"." ".$data["sdt"];?></td>
        <td><?php echo $data["email"];?></td>
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