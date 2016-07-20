<?php
	print_r ($_POST);exit;
	$conn = mysql_connect("localhost","root","freeswitch");
	mysql_query("set names utf-8");
	mysql_select_db("calls");
	$a = trim($_POST['a']);
	$b = trim($_POST['b']);
	$d = trim($_POST['d']);
	if($d != 'del'){
		$sql = "select * from `call` where a = ".$a." and b = ".$b;
		$res = mysql_query($sql);
		while($res = mysql_fetch_array($res)){
			$result[] = $res;
		}
		if(count($result) > 1){
			echo json_encode(array('code'=>0,'message'=>'系统出错'));exit;
		}
		if(empty($result)){
			$sql = "insert into `call`(a,b) values(".$a.",".$b.")";
			$res = mysql_query($sql);
			if(mysql_affected_rows($res)){
				echo json_encode(array('code'=>1,'message'=>'关联成功'));exit;
			}else{
				echo json_encode(array('code'=>1,'message'=>'关联失败'));exit;
			}
		}else{
			$sql = "update `call` set state = 'yes' where id = ".$result[0]['id'];
			$res = mysql_query($sql);
			if(mysql_affected_rows($res)){
				echo json_encode(array('code'=>1,'message'=>'关联成功'));exit;
			}else{
				echo json_encode(array('code'=>1,'message'=>'正在关联中'));exit;
			}
		}
		echo json_encode(array('code'=>0,'message'=>'系统出错'));exit;
	}if($d == 'del'){
		$sql = "update `call` set state = 'no' where a = ".$a." and b = ".$b;
		$res = mysql_query($sql);
		if(mysql_affected_rows($res)){
			echo json_encode(array('code'=>1,'message'=>'取消关联成功'));exit;
		}else{
			echo json_encode(array('code'=>1,'message'=>'取消关联失败'));exit;
		}
		echo json_encode(array('code'=>0,'message'=>'系统出错'));exit;
	}
	echo json_encode(array('code'=>0,'message'=>'参数错误'));exit;
?>