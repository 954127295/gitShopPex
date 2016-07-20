<?php
namespace Home\Controller;
use Think\Controller;
class UserCenterController extends Controller {
	public function __construct(){
		parent::__construct();
		$user = session("user");
		if(empty($user)){
			$this->redirect("User/login");
		}
		if(!empty($user)){
			$u = M("User");
			$where['id'] = $user['id'];
			$email = $u->where($where)->getField("email");
			if($email == ''){
				$this->redirect("User/remail");
			}
		}
	}
	//用户中心
	public function usercenter(){
		$this->assign("class","usercenter");
		$this->display();
	}
	//工单管理
	public function userLeaveTell(){
		$this->assign("class","userLeaveTell");
		$lt = M("LeaveTell");
		$lc = M("LeaveContent");
		$user = session("user");
		$where['uid'] = $user['id'];
		$count = $lt->where($where)->count();
		$page = new \Think\Page($count,3);
		$list = $lt->where($where)->limit($page->firstRow.','.$page->listRows)->order("id desc")->select();
		$newlist = array();
		foreach($list as $li){
			unset($where);
			$where['ltid'] = $li['id'];
			$where['type'] = 'question';
			$li['content'] = $lc->where($where)->order("id asc")->find();
			$newlist[] = $li;
		}
		$this->assign("list",$newlist);
		$this->assign("pages",$page->show());
		$this->display();
	}
	//工单详情
	public function showContent(){
		if(!IS_POST){
			$this->assign("class","userLeaveTell");
			$id = I("get.id");
			$lt = M("LeaveTell");
			$where['id'] = $id;
			$info = $lt->where($where)->find();
			$this->assign("info",$info);
			$lc = M("LeaveContent");
			unset($where);
			$where['ltid'] = $id;
			$list = $lc->where($where)->order("id asc")->select();
			$this->assign("list",$list);
			$this->display();
		}
		if(IS_POST){
			$question = I("post.question");
			$ltid = I("post.ltid");
			if(empty($question)){
				$this->error("请输入内容");
			}
			if(empty($ltid)){
				$this->error("参数错误");
			}
			$lc = M("LeaveContent");
			$data['question'] = $question;
			$data['ltid'] = $ltid;
			if($lc->add($data)){
				$this->redirect("UserCenter/showContent",array("id"=>$ltid));
			}
		}
	}
	//关闭工单
	public function closeLeaveTell(){
		$id = I("get.id");
		$lt = M("LeaveTell");
		$where['id'] = $id;
		$data['status'] = 'over';
		$res = $lt->where($where)->save($data);
		if(!empty($res)){
			$this->redirect("UserCenter/showContent",array('id'=>$id));
		}else{
			$this->error("出错了");
		}
	}
	//提交工单
	public function referOrder(){
		if(IS_POST){
			$data = I("post.data");
			$user = session("user");
			$lt = M("LeaveTell");
			$lc = M("LeaveContent");
			$lt->startTrans();
			$ltdata['uid'] = $user['id'];
			$ltdata['qq'] = $data['qq'];
			$ltdata['tel'] = $data['tel'];
			$rest = $lt->add($ltdata);
			$lcdata['ltid'] = $rest;
			$lcdata['question'] = $data['question'];
			$resc = $lc->add($lcdata);
			if($resc){
				$lt->commit();
			}else{
				$lt->rollback();
			}
			$this->redirect("UserCenter/referOrder");
		}
		if(!IS_POST){
			$this->assign("class","userLeaveTell");
			$this->display();
		}
	}
	//设备管理
	public function userEquipment(){
		$this->assign("class","userEquipment");
		$this->display();
	}
	//安全设置
	public function userSafety(){
		$this->assign("class","userSafety");
		$u = M("User");
		$user = session("user");
		$where['id'] = $user['id'];
		$email = $u->where($where)->getField("email");
		$this->assign("email",$email);
		$this->display();
	}
	//密码修改
	public function editPassword(){
		if(IS_POST){
			$user = session("user");
			$password = I("post.password");
			$npassword = I("post.npassword");
			$where['id'] = $user['id'];
			$u = M("User");
			$cpassword = $u->where($where)->getField("password");
			if($cpassword != md5($password)){
				$this->error("旧密码不正确");
			}else{
				$data['password'] = md5($npassword);
				$res = $u->where($where)->save($data);
				if(!empty($res)){
					session("user","");
					$this->redirect("User/login");
				}
			}
		}
		if(!IS_POST){
			$this->assign("class","userSafety");
			$this->display();
		}
	}
	//邮箱修改绑定
	public function editEmail(){
		if(!IS_POST){
			$this->display();
		}
		if(IS_POST){
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
			$res = sendMail($email,'修改邮箱信息',"你好".$email."您已经请求了修改邮箱，可以点击下面的链接来修改邮箱".$web."/index.php/UserCenter/mailRcheck/uid/".$uid."/email/".urlencode($email).".html");
			if(!empty($res)){
				$this->redirect("UserCenter/usercenter");
			}
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
		if(!empty($check)){
			$this->redirect("UserCenter/usercenter");
		}
		$email = urldecode($email);
		$data['email'] = $email;
		$res = $u->where($where)->save($data);
		if(!empty($res)){
			$this->redirect("UserCenter/usercenter");
		}
	}
	//用户退出
	public function loginout(){
		session("user",null);
		$this->redirect("Index/index");
	}
}