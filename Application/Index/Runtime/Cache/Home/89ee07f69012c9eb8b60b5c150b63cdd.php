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
	#hr{border 1px dotted #DDDDDD;margin:0;padding:0;}
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
	.head_r_div{border:1px solid #DDDDDD;width:100%;height:40px;background-color:#F5F6FA;line-height:40px;}
	.refer_c_div{width:100%;height:500px;border:1px solid #DDDDDD;}
	.refer_c_div #center{width:80%;height:100px;margin:0 auto;margin-top:15px;}
	.refer_c_div #center #left{width:10%;height:100%;float:left;display:inline;text-align:right;}
	.refer_c_div #center #right{width:88%;height:100%;float:right;display:inline;}
	.refer_c_div #center #right textarea{width:100%;height:100%;outline:none;resize:none;}
	.refer_c_div #centeri{width:80%;height:45px;margin:0 auto;margin-top:15px;}
	.refer_c_div #centeri #left{width:10%;height:100%;line-height:45px;float:left;display:inline;text-align:right;}
	.refer_c_div #centeri #right{width:88%;height:100%;float:right;display:inline;}
	.refer_c_div #centeri #right input{width:100%;height:90%;outline:none;resize:none;}
	.refer_c_div #submit{width:58px;height:32px;border:0px solid red;background-color:#0099CC;color:white;margin-left:50%;}
	.uc_index_right_div #right_center table{width:100%;text-align:center;margin-top:20px;}
	.uc_index_right_div #right_center #tablediv{border:1px solid #DDDDDD;}
	.uc_index_right_div #right_center #tablediv #show_d_content{width:95%;height:500px;overflow:scroll;margin:0 auto;}
	.uc_index_right_div #right_center #tablediv #show_d_content #ne{width:100%;height:auto;margin-top:12px;background-color:#EAFBFF;color:#9999A5;line-height:50px;}
	.uc_index_right_div #right_center #tablediv #show_d_content #goone_div{margin-top:15px;width:100%;height:220px;}
	.uc_index_right_div #right_center #tablediv #show_d_content #goone_div textarea{width:100%;height:200px;margin-top:7px;outline:none;resize:none;}
	.uc_index_right_div #right_center #tablediv #show_d_content #goone_div input{width:76px;height:33px;background-color:#0099CC;border:0px solid red;color:white;}
	
	#show_d_content {
        width:200px;
        height:200px;
        overflow:auto;
    }
    #show_d_content div {
        width:100%;
        height:500px;
    }    #show_d_content::-webkit-scrollbar {
        width:10px;
        height:10px;
    }
    #show_d_content::-webkit-scrollbar-button    {
        background-color:#B4CCCE;
    }
    #show_d_content::-webkit-scrollbar-track     {
        background:#BAC1C2;
    }
    #show_d_content::-webkit-scrollbar-track-piece {
        background:url(http://www.lyblog.net/wp/wp-content/themes/mine/img/stripes_tiny_08.png);
    }
    #show_d_content::-webkit-scrollbar-thumb{
        background:#A3BABB;
        border-radius:4px;
    }
    #show_d_content::-webkit-scrollbar-corner {
        background:#A3BABB;
    }
    #show_d_content::-webkit-scrollbar-resizer  {
        background:#A3BABB;
    }
	
	
	
	
	.pages{width:100%;text-align:right;padding:10px 0;clear:both;}
	.pages a,.pages .current{font-size:12px;font-family:Arial;margin:0 2px;}
	.pages a,.pages .current{border:1px solid #5FA623;background:#fff;padding:1px 6px;text-decoration:none;}
	.pages .current,.pages a:hover{background:#7AB63F;color:#fff;}
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
			<a href="<?php echo U('UserCenter/usercenter');?>">基本设置</a>
		</div>
		<div <?php if($class == 'userLeaveTell'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('UserCenter/userLeaveTell');?>">工单管理</a>
		</div>
		<div <?php if($class == 'userEquipment'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('UserCenter/userEquipment');?>">设备管理</a>
		</div>
		<div <?php if($class == 'userSafety'): ?>class="bg"<?php endif; ?> id="title_next">
			<a href="<?php echo U('UserCenter/userSafety');?>">安全设置</a>
		</div>
	</div>
	<div class="uc_index_right_div"></div>
	<div style="clear:both;"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>