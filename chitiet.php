<?php
require_once ('db/dbhelper.php');
    session_start();
?>
<?php 
    if (isset($_GET['id'])) {
      $id_now = $_GET['id'];
    }
    $sql =  "select * from canbo where id = " .$id_now;
    $datas = select_list($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <LINK REL="SHORTCUT ICON" HREF="./images/counterstrike4.ico">
        <title>Chi tiết</title>
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
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Phòng ban</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="giangvien.php">Giảng viên</a>
    </li>
  </ul>
</nav>
        </header>
         <?
     foreach($datas as $data)
     $donvi     = "select name from donvi where id = " .$data['id_donvi'];

    $namedonvi = select_one($donvi);
    if ($namedonvi != null) {
       $namedonvi = $namedonvi['name'];} {?> 

        <div class="container">
          <h3 style="text-align:center">Thầy/Cô:  <strong style="box-shadow: red 3px 3px 10px"><?php echo " ".$data["name"];?></strong></h3>
          <hr>
          <div class="row">
            <div class="col-6">
              <img src="<?php echo $data["thumbnail"];?>" width="104%" height="450px">
            </div>
            <div class="col-6">
              
              <p>Tên:<strong style="font-size: 18px;margin-left: 80px;"><?php echo $data["name"];?></strong></p>
              <hr width="60%">
              <p>Chức Vụ:<strong style="font-size: 18px;margin-left: 45px;"><?php echo $data["chucvu"];?></strong></p>
              <hr width="60%">
              <p>Đơn Vị:<strong style="font-size: 18px;margin-left: 58px;"><?php echo $namedonvi;?></strong></p>
              <hr width="60%">
              <p>SDT:<strong style="font-size: 18px;margin-left: 75px;"><?php echo "+84"." ". $data["sdt"];?></strong></p>
              <hr width="60%">
              <p>Email:<strong style="font-size: 18px;margin-left: 65px;"><?php echo $data["email"];?></strong></p>
              <hr width="60%">
              <?php } ?>
            </div>
          </div>
        </div>
        <br>
        <?php require_once('footer.php') ?>