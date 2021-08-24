<?php
	require_once('lib_db.php');
	if(isset($_POST['add'])){
		$data= array();
		
		$t=$_POST['taikhoan'];
		$m=$_POST['matkhau'];
		$stt=$_POST['trangthai'];

	$data['taikhoan']=$t;
	$data['matkhau'] = $m;
	$data['trangthai']= $stt;
   
	$tbl="user";
	$sql=data_to_sql_insert($tbl,$data);
	//print_r($sql);exit();
	$ret = exec_update($sql);
	if ($ret == 1){
        header("Location:adminmb.php");
    }
}
	

?>	