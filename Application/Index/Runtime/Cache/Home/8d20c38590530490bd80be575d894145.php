<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>shop</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="/Public/css/drag.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
	*{font-family:"微软雅黑";}
	a:hover{text-decoration:none;}
	.r_head_div{width:90%;height:78px;margin:0 auto;}
	.r_head_div img{width:110px;height:62px;float:left;display:inline;margin-top:8px;}
	.r_head_div #h_right{width:50%;height:78px;line-height:78px;text-align:right;float:right;display:inline;}
	#hr{width:100%;height:1px;background-color:#E3E3E3;}
	.l_content_div{width:75%;margin:0 auto;margin-top:50px;}
	.l_content_div #left{width:50%;height:auto;float:left;dispaly:inline;}
	.l_content_div #left img{width:80%;margin:0 auto;margin-top:10%;margin-left:10%;width:400px;height:300px;border-radius:7px;}
	.l_content_div #right{width:50%;height:auto;float:right;dispaly:inline;}
	.l_content_div #right #content{border:1px solid #E3E3E3;width:290px;height:auto;float:right;display:inline;}
	.l_content_div #right #content #cinput{width:90%;height:auto;margin:0 auto;margin-top:15px;}
	.l_content_div #right #content #cinput input{width:100%;height:37px;border:1px solid #E3E3E3;border-radius:5px;}
	.l_content_div #right #content #cinput #submit{background-color:#00A2CA;color:white;}
	.l_content_div #right #content #cinput #a1{float:left;display:inline;}
	.l_content_div #right #content #cinput #a2{float:right;display:inline;}
  </style>
  <body>
	<div class="r_head_div">
		<img src="/Public/img/2.jpg" />
		<div id="h_right">
			新产品   管理控制台   帮助与文档
		</div>
		<div style="clear:both;"></div>
	</div>
	<div id="hr"></div>
	<div class="l_content_div">
		<div id="left">
			<img src="/Public/img/2.jpg" />
		</div>
		<div id="right">
			<div id="content">
				<form onsubmit="return checkL()" action="<?php echo U('User/login');?>" method="post">
					<div id="cinput">
						请使用用户名或者邮箱登录
						<hr>
					<h5>登录名:</h5>
					<input type="text" name="username" />
					<h5>登录密码:</h5>
					<input type="password" name="password" />
					<h5>验证码:</h5>
					<div id="drag"></div>
					<input type="hidden" id="check" />
					</div>
					<div id="cinput">
						<input id="submit" type="submit" value="登录" />
					</div>
					<div id="cinput">
						<a href="<?php echo U('User/forgetPass');?>" id="a1">忘记密码？</a>
						<a href="<?php echo U('User/register');?>" id="a2">免费注册</a>
						<div style="clear:both;"></div>
					</div>
					<br>
				</form>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<style>
	.foot_div{width:90%;margin:0 auto;}
</style>
<hr>
	<div class="foot_div">
		关于我们 法律声明 廉正举报 友情链接<br>
		阿里巴巴集团 淘宝网 天猫 聚划算 全球速卖通 阿里巴巴国际交易市场 1688 阿里妈妈 阿里旅行去啊 阿里云计算 YunOS 阿里通信 万网 高德 UC 友盟 虾米 天天动听 来往 钉钉 支付宝
	<div class="white_div"></div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/Public/js/drag.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('#drag').drag();
	</script>
	<script type="text/javascript">
		function checkL(){
			var c = $("#check").val();
			if(c != 'yes'){
				return false;
			}
		}
	</script>
  </body>
</html>