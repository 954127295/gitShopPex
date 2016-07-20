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
  <style>
	*{font-family:"微软雅黑";}
	a:hover{text-decoration:none;}
	.r_head_div{width:90%;height:78px;margin:0 auto;}
	.r_head_div img{width:110px;height:62px;float:left;display:inline;margin-top:8px;}
	.r_head_div #h_right{width:50%;height:78px;line-height:78px;text-align:right;float:right;display:inline;}
	#hr{width:100%;height:1px;background-color:#E3E3E3;}
	.s_r_div{border:1px solid #E3E3E3;background-color:#EDF4F9;width:80%;margin:0 auto;height:35px;line-height:35px;}
	.r_content_div{width:60%;height:auto;text-align:center;margin:0 auto;margin-top:25px;}
	.r_content_div #r_content_div_t{width:100%;height:auto;text-align:center;margin:0 auto;margin-top:25px;}
	.r_content_div #r_content_div_t #input{width:270px;height:36px;border:1px solid #E3E3E3;}
	.logingo{width:80%;margin:0 auto;text-align:right;}
	.r_content_div #r_content_div_t #submit{border:0px solid red;width:140px;height:35px;border-radius:5px;background-color:#008FB2;color:white;}
	.r_content_div #r_content_div_t a{color:red;}
  </style>
  <body>
	<div class="r_head_div">
		<img src="/Public/img/2.jpg" />
		<div id="h_right">
			新产品   管理控制台   帮助与文档
		</div>
		<div style="clear:both;"></div>
	</div>
	<div id="hr"></div><br>
	<div class="s_r_div">&nbsp;密码修改</div>
	<div class="r_content_div">
	<form onsubmit="return checkform()" action="<?php echo U('Index/editPassword');?>" method="post">
		<div id="r_content_div_t">
			&nbsp;&nbsp;&nbsp;&nbsp;<a>*</a>&nbsp;会员名&nbsp;&nbsp;&nbsp;<input id="input" readonly type="text" value="<?php echo ($_SESSION['user']['username']); ?>" />
		</div>
		<div id="r_content_div_t">
			&nbsp;&nbsp;&nbsp;&nbsp;<a>*</a>&nbsp;旧密码&nbsp;&nbsp;&nbsp;<input id="input" name="password" type="password" />
			<br>
			<a id="pa" style="display:none">*旧密码错误</a>
		</div>
		<div id="r_content_div_t">
			&nbsp;&nbsp;&nbsp;&nbsp;<a>*</a>&nbsp;新密码&nbsp;&nbsp;&nbsp;<input id="input" type="password" name="npassword" />
			<br>
			<a id="ua" style="display:none;">*请填写6-12位的密码</a>
		</div>
		<div id="r_content_div_t">
			<a>*</a>&nbsp;确认密码&nbsp;&nbsp;&nbsp;<input id="input" type="password" name="cpassword" />
			<br>
			<a id="cpa" style="display:none">*两次密码不一致</a>
		</div>
		<div id="r_content_div_t">
			<input id="submit" type="submit" value="确认" />
		</div>
	</form>
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
	<script type="text/javascript">
		function checkform(){
			var p = $("input[name='npassword']").val();
			var cp = $("input[name='cpassword']").val();
			var op = $("#input[name='password']").val();
			ajaxCheckOldPass(op);
			var tu = /^\w{6,12}$/;
			if(!tu.test(p)){
				$("#ua").show(500);
				return false;
			}else{
				$("#ua").hide(500);
			}
			if(p != cp){
				$("#cpa").show(500);
				return false;
			}else{
				$("#cpa").hide(500);
			}
		}
		function ajaxCheckOldPass(password){
			$.ajax({
				url:"<?php echo U('Ajax/checkoldPass');?>",
				type:"post",
				dataType:"json",
				data:{"password":password},
				success:function(data){
					if(data.code == 1){
						if(data.res != 'yes'){
							$("#pa").show(500);
							return false;
						}else{
							$("#pa").hide(500);
						}
					}
				}
			});
		}
	</script>
  </body>
</html>