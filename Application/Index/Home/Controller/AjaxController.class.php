<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
    public function checkoldPass(){
		$password = I("post.password");
		$user = session("user");
		$where['id'] = $user['id'];
		$u = M("User");
		$check = $u->where($where)->getField("password");
		if($check == md5($password)){
			echo json_encode(array('code'=>1,'res'=>'yes'));exit;
		}else{
			echo json_encode(array('code'=>1,'res'=>'no'));exit;
		}
    }
}