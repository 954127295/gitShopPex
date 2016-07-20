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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<style>
	*{font-family:"微软雅黑";}
	a:hover{text-decoration:none;}
	.uc_index_head_div{width:100%;height:50px;background-color:#0099CC;}
	.uc_index_head_div #left_h1{width:15%;height:50px;line-height:50px;text-align:center;float:left;display:inline;}
	.uc_index_head_div #height_center_h1{width:1px;height:100%;background-color:white;float:left;display:inline;}
	.uc_index_head_div #left_h1 a{color:white;}
	.uc_index_head_div #right_h1{width:10%;height:50px;line-height:50px;text-align:center;float:right;display:inline;}
	.uc_index_head_div #right_h1 a{color:white;}
	.uc_index_left_div{background-color:#EAEDF1;width:15%;height:700px;float:left;display:inline;}
	.uc_index_left_div #title{width:100%;height:70px;text-align:center;line-height:70px;font-weight:bold;background-color:#D9DEE4;}
	.uc_index_left_div #title_next{width:100%;height:43px;text-align:center;line-height:43px;}
	.uc_index_left_div #title_next a{color:black;}
	.bg{background-color:white;}
	.uc_index_right_div{width:85%;height:700px;float:right;display:inline;}
	.uc_index_right_div #right_center{width:98%;margin:0 auto;margin-top:20px;}
	.uc_index_right_div #right_center #content{width:90%;height:70px;margin:0 auto;}
	.uc_index_right_div #right_center #content #l1{width:7%;height:70px;line-height:70px;float:left;font-weight:bold;display:inline;text-align:left;}
	.uc_index_right_div #right_center #content #l2{width:60%;height:70px;line-height:70px;float:left;margin-left:15px;display:inline;text-align:left;}
	.uc_index_right_div #right_center #content #l3{width:30%;height:70px;line-height:70px;float:left;display:inline;text-align:left;}
	</style>
	<div class="uc_index_head_div">
		<div id="left_h1">
			<a href="<?php echo U('Index/index');?>">站点首页</a>
		</div>
		<div id="height_center_h1"></div>
		<div id="right_h1">
			<a>退出</a>
		</div>
		<div id="right_h1">
			<a>您好，<?php echo ($_SESSION['user']['username']); ?></a>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="uc_index_left_div">
		<div id="title">
			账号管理
		</div>
		<div <?php if($class == 'usercenter'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('Index/usercenter');?>">基本设置</a>
		</div>
		<div <?php if($class == 'userLeaveTell'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('Index/userLeaveTell');?>">留言管理</a>
		</div>
		<div <?php if($class == 'userEquipment'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('Index/userEquipment');?>">设备管理</a>
		</div>
		<div <?php if($class == 'userSafety'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('Index/userSafety');?>">安全设置</a>
		</div>
	</div>
	<div class="uc_index_right_div">
		<div id="right_center">
			安全设置
			<hr>
			<p>账号：<?php echo ($_SESSION['user']['username']); ?></p>
			<p>邮箱：<?php echo ($email); ?></p>
			<p>注册时间：<?php echo ($_SESSION['user']['rtime']); ?></p>
			<hr>
			<div id="content">
				<div id="l1">登录密码</div>
				<div id="l2">安全性高的密码可以使帐号更安全。建议您定期更换密码。</div>
				<div id="l3"><a href="<?php echo U('Index/editPassword');?>" target="_blank">修改</a></div>
				<div style="clear:both;"></div>
			</div>
			<hr style="border: 1px dotted #E1E6EB;width:400" size=1>
			<div id="content">
				<div id="l1">邮箱绑定</div>
				<div id="l2">您已绑定了邮箱<a style="color:#009900;"><?php echo ($email); ?></a>。</div>
				<div id="l3"><a href="<?php echo U('Index/editEmail');?>">修改</a></div>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
	<div style="clear:both;"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>