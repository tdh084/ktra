<?php 

require_once("lib_db.php");
if (isset($_GET['id'])){
	$id=$_GET['id'];
	$sql = "Delete from user where id = $id";
	 //print_r($sql);exit();
	$ret = exec_update($sql);
	if ($ret == 1){
        header("Location:adminmb.php");
    }
  
}










?>