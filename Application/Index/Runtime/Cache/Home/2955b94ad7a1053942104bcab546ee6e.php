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
	.head_title{width:100%;height:30px;background-color:#2E2055;line-height:30px;}
	.head_center_title{width:80%;height:100%;color:white;margin:0 auto;font-size:10px;font-family:"微软雅黑";}
	.head_center_title #left{width:25%;height:100%;float:left;display:inline;}
	.head_center_title #right{width:50%;height:100%;float:right;display:inline;text-align:right;}
	.head_center_title a{color:white;}
	.product_div{width:90%;height:105px;margin:0 auto;}
	.product_div #hr{width:0.1%;background-color:#D8D8D8;height:100%;float:left;}
	.product_div #content{width:19%;height:100%;float:left;}
	.product_div #content_d{width:90%;margin:0 auto;height:90%;}
	.product_div #content_d img{width:100%;height:100%;}
	.white_div{width:100%;height:30px;}
	.jichu_div{width:90%;margin:0 auto;height:55px;line-height:55px;text-align:center;font-size:25px;font-weight:bold;}
	.products_div{border:0px solid red;width:90%;height:400px;margin:0 auto;}
	.products_div #descript{border:1px solid #DDDDDD;width:16.6666666%;height:100%;float:left;display:inline;}
	.products_div #descript #title{width:100%;height:80px;text-align:center;}
	.products_div #descript #title h4{font-weight:bold;cursor:pointer;}
	.products_div #descript #title a{color:#DDDDDD;font-size:12px;}
	.products_div #descript #content{height:300px;text-align:center;line-height:55px;}
	.jquery_show_div{width:90%;height:400px;margin:0 auto;display:none;background-color:#F8F9FB;}
	.jquery_show_div #title{text-align:center;}
	.jquery_show_div #title a{color:#DDDDDD;font-size:12px;}
	.jquery_show_div .d1_div{width:60%;height:90px;margin:0 auto;}
	.jquery_show_div .d1_div #c1_div{width:100%;height:60px;margin:0 auto;float:left;}
	.jquery_show_div .d2_div{width:60%;height:210px;margin:0 auto;}
	.jquery_show_div .d2_div #t_d2_div{width:50%;height:90px;float:left;display:inline;margin-top:10px;}
	#a{color:gray;font-size:13px;}
	.jquery_show_div .d1_div #c1_div #left{width:50%;height:80px;float:left;display:inline;}
	.jquery_show_div .d1_div #c1_div #right{border:1px solid #00A2CA;color:#00A2CA;width:15%;height:30px;display:block;float:right;text-align:center;line-height:30px;}
	#close{width:20px;height:20px;float:right;}
	.web_content_div{width:90%;margin:0 auto;height:auto;text-align:center;}
	.web_content_div #content{width:30%;margin-left:2%;float:left;display:inline;}
  </style>
  <body>
	<div class="head_title">
		<div class="head_center_title">
			<?php if($_SESSION['user']== null): ?><div id="left">欢迎，请<a href="<?php echo U('User/login');?>">登录</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('User/register');?>">注册</a></div>
			<?php else: ?>
				<div id="left">欢迎您，<a href="<?php echo U('UserCenter/usercenter');?>"><?php echo ($_SESSION['user']['username']); ?></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('UserCenter/loginout');?>">退出</a></div><?php endif; ?>
			<div id="right">新产品&nbsp;&nbsp;&nbsp;管理控制台&nbsp;&nbsp;&nbsp;帮助与文档</div>
			<div style="clear:both;"></div>
		</div>
	</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="carousel slide" id="carousel-621169">
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0" data-target="#carousel-621169">
						</li>
						<li data-slide-to="1" data-target="#carousel-621169">
						</li>
						<li data-slide-to="2" data-target="#carousel-621169">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img alt="" src="/Public/img/1.jpg" />
						</div>
						<div class="item">
							<img alt="" src="/Public/img/2.jpg" />
						</div>
						<div class="item">
							<img alt="" src="/Public/img/3.jpg" />
						</div>
					</div>
					<a data-slide="prev" href="#carousel-621169" class="left carousel-control"></a>
					<a data-slide="next" href="#carousel-621169" class="right carousel-control"></a>
				</div>
			</div>
		</div>
	<div class="white_div"></div>
	<div class="product_div">
		<div id="hr"></div>
		<div id="content">
			<div id="content_d">
					<img src="/Public/img/product.png" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="hr"></div>
		<div id="content">
			<div id="content_d">
					<img src="/Public/img/product.png" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="hr"></div>
		<div id="content">
			<div id="content_d">
					<img src="/Public/img/product.png" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="hr"></div>
		<div id="content">
			<div id="content_d">
					<img src="/Public/img/product.png" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="hr"></div>
		<div id="content">
			<div id="content_d">
					<img src="/Public/img/product.png" />
				<div style="clear:both;"></div>
			</div>
		</div>
		<div id="hr"></div>
		<div style="clear:both;"></div>
	</div>
	<div class="white_div"></div>
	<div class="jichu_div">安全、稳定的云计算基础服务</div>
	<div class="white_div"></div>
	<div class="products_div">
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div id="descript">
			<div id="title">
				<h4>云盾（安全）</h4>
				<a>高性能、超安全、免运维</a>
			</div>
			<div id="content">
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			<p>web应用防火墙</p>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="jquery_show_div">
		<div id="close">X</div>
		<div id="title">
			<h3>弹性计算</h3>
			<a>高可用，高性能，可弹性伸缩的计算服务</a>
		</div>
		<div style="border:1px dotted #DCDDDF;width:90%;margin:0 auto;height:1px;margin-top:10px;"></div>
		<br>
		<div class="d1_div">
			<h4>云服务ecs</h4>
			<div id="c1_div">
				<div id="left">
					可弹性伸缩、安全稳定、简单易用的计算服务包年包月
				</div>
				<a href="#" id="right">立即购买</a>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="d2_div">
			<div id="t_d2_div">
				<h4>云数据库redis版</h4>
				<a id="a">提供数据告诉读写和持久化</a><br>
				<a>立即购买</a>
			</div>
			<div id="t_d2_div">
				<h4>云数据库redis版</h4>
				<a id="a">提供数据告诉读写和持久化</a><br>
				<a>立即购买</a>
			</div>
			<div style="clear:both;"></div>
			<div id="t_d2_div">
				<h4>云数据库redis版</h4>
				<a id="a">提供数据告诉读写和持久化</a><br>
				<a>立即购买</a>
			</div>
			<div id="t_d2_div">
				<h4>云数据库redis版</h4>
				<a id="a">提供数据告诉读写和持久化</a><br>
				<a>立即购买</a>
			</div>
		</div>
	</div>
	<div class="white_div"></div>
	<div class="jichu_div">满足更广泛业务需求的产品系列</div>
	<div class="white_div"></div>
	<div class="web_content_div">
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="white_div"></div>
	<div class="jichu_div">满足更广泛业务需求的产品系列</div>
	<div class="white_div"></div>
	<div class="web_content_div">
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="white_div"></div>
	<div class="jichu_div">满足更广泛业务需求的产品系列</div>
	<div class="white_div"></div>
	<div class="web_content_div">
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
		</div>
		<div id="content">
			<h4>域名与网站服务</h4>
			<p id="a">超1000万域名在万网注册，国内域名市场NO.1。全球领先的云DNS集群技术提供解析服务，更多服务应有尽有。</p>
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
	<script type="text/javascript">
		$(document).on("mouseover","#descript h4",function(){
			$(".products_div").hide(500);
			$(".jquery_show_div").show(500);
		});
		$(document).on("mouseover","#close",function(){
			$(".products_div").show(500);
			$(".jquery_show_div").hide(500);
		});
	</script>
  </body>
</html>