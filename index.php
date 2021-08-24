<?php 

  session_start();
  require_once('db/dbhelper.php');
  $wh = ""; 
 ?>
 <?php 

 
  $sql= "select * from donvi ".$wh."";
  

  $datas = select_list($sql);

$stt=0;
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL="SHORTCUT ICON" HREF="./images/counterstrike4.ico">
        <title>Tra cứu!</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
      <a class="nav-link" style="color: red;" href="./Login/login.php">Login as admin</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#">Phòng ban</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="giangvien.php">Giảng viên</a>
    </li>
  </ul>
</nav>
        </header>
        <div id="main">
    <div class="container">
        <h2 style="text-align: center;">TRA CỨU THEO PHÒNG BAN</h2>
            <?php foreach($datas as $data) {?>
            <a href="vanphong.php?id=<?php echo $data['id'];?>"><b style="color: red"><?php echo $stt+=1?>.</b> <?php echo $data["name"].'<br>';?></a>
            <?php } ?>
</div>
    </div>
    </body>
    <hr>
    <?php require_once('footer.php') ?>