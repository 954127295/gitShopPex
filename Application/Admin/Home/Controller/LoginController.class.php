<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
		$this->display();
    }
	public function loginIn(){
		$this->redirect("Index/index");
	}
}