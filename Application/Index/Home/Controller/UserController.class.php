<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//注册页面
    public function register(){
		$this->display();
    }
	//邮箱验证
	public function remail(){
		$u = M("User");
		if(IS_POST){
			$username = I("post.username");
			$password = I("post.password");
			$data['username'] = $username;
			$data['password'] = md5($password);
			$where['username'] = $username;
			$check = $u->where($where)->find();
			if(!empty($check)){
				$this->error("用户名已存在");
			}
			$userRes = $u->add($data);
			if($userRes){
				unset($where);
				$where['id'] = $userRes;
				$user = $u->where($where)->find();
				session("user",$user);
				$this->redirect("User/remail");
			}
		}
		if(!IS_POST){
			$user = session("user");
			$where['id'] = $user['id'];
			$email = $u->where($where)->getField("email");
			$this->assign("email",$email);
			$this->display();	
		}
	}
	//发送邮件
	public function sendmailto(){
		$email = I("post.email");
		$user = session("user");
		$uid = $user['id'];
		$u = M("User");
		$where['email'] = $email;
		$check = $u->where($where)->find();
		if(!empty($check)){
			$this->error("邮箱已存在");
		}
		$web = C("WEB_URL");
		$res = sendMail($email,'邮箱验证信息',"你好".$email."您已经请求了邮箱验证，可以点击下面的链接来验证邮箱".$web."/index.php/User/mailRcheck/uid/".$uid."/email/".urlencode($email).".html");
		if(!empty($res)){
			$this->redirect("Index/index");
		}
	}
	//邮件url返回验证
	public function mailRcheck(){
		$uid = I("get.uid");
		$email = I("get.email");
		$u = M("User");
		$where['email'] = $email;
		$check = $u->where($where)->find();
		unset($where);
		$where['id'] = $uid;
		$ucheck = $u->where($where)->getField("email");
		if(!empty($check) || !empty($ucheck)){
			$this->redirect("UserCenter/usercenter");
		}
		$email = urldecode($email);
		$data['email'] = $email;
		$res = $u->where($where)->save($data);
		if(!empty($res)){
			$this->redirect("UserCenter/usercenter");
		}
	}
	//登录
	public function login(){
		if(IS_POST){
			$username = I("post.username");
			$password = I("post.password");
			$u = M("User");
			$where['username'] = $username;
			$where['password'] = md5($password);
			$user = $u->where($where)->find();
			if(empty($user)){
				$this->error("登录失败");
			}
			if(!empty($user)){
				session("user",$user);
				$this->redirect("UserCenter/usercenter");
			}
		}
		IF(!IS_POST){
			$this->display();
		}
	}
	//忘记密码
	public function forgetPass(){
		if(!IS_POST){
			$this->display();
		}
		if(IS_POST){
			$email = I("post.email");
			$where['email'] = $email;
			$u = M("User");
			$user = $u->where($where)->find();
			$users = sha1(md5($user['username']).md5($user['password']).md5($user['email']));
			$web = C("WEB_URL");
			$res = sendMail($email,'邮箱验证信息',"你好".$email."您已经请求了重置密码，可以点击下面的链接来重置密码".$web."/index.php/User/resetPass/uid/".$user['id']."/token/".$users.".html");
			if(!empty($res)){
				$this->redirect("User/forgetPass");
			}
		}
	}
	//密码重置
	public function resetPass(){
		if(!IS_POST){
			$uid = I("get.uid");
			$token = I("get.token");
			if(empty($uid) || empty($token)){
				$this->error("请通过验证邮箱重置");
			}
			$where['id'] = $uid;
			$u = M("User");
			$user = $u->where($where)->find();
			$eres = sha1(md5($user['username']).md5($user['password']).md5($user['email']));
			if($token == $eres){
				$info = array();
				$info['uid'] = $uid;
				$info['token'] = $token;
				$this->assign("info",$info);
				$this->display();
			}else{
				$this->error("请通过验证邮箱重置");
			}
		}
		if(IS_POST){
			$password = I("post.password");
			$uid = I("post.uid");
			$token = I("post.token");
			$where['id'] = $uid;
			$u = M("User");
			$user = $u->where($where)->find();
			$eres = sha1(md5($user['username']).md5($user['password']).md5($user['email']));
			if($token == $eres){
				$data['password'] = md5($password);
				$res = $u->where($where)->save($data);
				if(!empty($res)){
					$this->redirect("User/login");
				}else{
					$this->error("系统出错");
				}
			}else{
				$this->error("请通过验证邮箱重置");
			}
		}
	}
	//验证码
	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 18;
		$Verify->length = 4;
		$Verify->useNoise = false;
		$Verify->entry();
	}
	//验证码验证
	public function verify_c($code){
		$Verify = new \Think\Verify();
		return $Verify->check($code);
	}
}