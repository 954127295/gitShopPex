<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />  

<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/Public/css/styles.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
<form action="<?php echo U('Login/loginIn');?>" method="post">
 <dd class="user_icon">
  <input type="text" placeholder="账号" name="username" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" name="password" class="login_txtbx"/>
 </dd>
 
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
</form>
 <dd>
 <p>请勿盗用</p>
 
 </dd>
</dl>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/Public/js/verificationNumbers.js"></script>
<script src="/Public/js/Particleground.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $(".submit_btn").click(function(){
	  location.href="index.html";
	  });
});
	$(document).on("click","#codeChange",function(){
		$("#codeChange").attr("src","/index.php/Login/verify/"+Math.random()+".html");
	});
</script>
</body>
</html>