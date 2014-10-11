<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>新蜂后花园 ｜ Buzz~</title>
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <meta name='author' content='hlzhang' />
    <link rel='shortcut icon' href=''>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Index_Index_index.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
    <script src='__PUBLIC__/js/bootstrap.min.js'></script>
    <script src='__PUBLIC__/js/jquery.min.js'></script>
    <script src='__PUBLIC__/js/Index_Index_index.js'></script>

</head>
<body>
	<div id='header'>
		<!--navbar-->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type ="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class ="sr-only">Toggle navigation</span>
						<span class ="icon-bar"></span>
						<span class ="icon-bar"></span>
						<span class ="icon-bar"></span>
					</button>
					<a class="navbar-brand nav_main" href="#">Garden</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo U('Index/Index/index');?>" class="nav_main">花园首页</a></li>
						<li><a href="<?php echo U('Index/Command/index');?>" class="nav_main">兵长有令</a></li>
						<li><a href="<?php echo U('Index/Fruit/index');?>" class="nav_main">蜂蜜共享</a></li>
						<li><a href="<?php echo U('Index/Chat/index');?>" class="nav_main">嗡嗡水区</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php  if($_SESSION['uid'] == '' || $_SESSION['username'] == ''){ echo "<li><a id='login' href='__ROOT__/index.php/Index/Login/index' class='nav_main'>Log in</a></li><li><a id='register' href='__ROOT__/index.php/Index/Register/index' class='nav_main'>Register</a></li>"; } else{ echo "<li><a id='myself' href='' class='nav_main'>".session('username')."</a></li><li><a id='logout' href='__ROOT__/index.php/Index/Index/logout' class='nav_main'>Log out</a></li>"; } ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav> <!--end navbar-->
	</div>
	
	<div id='content'>

		<div id="promote">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="__PUBLIC__/img/home.jpg" alt="ourhome">		
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h1>新蜂后花园</h1>
					<h3>凝聚 共享 开放</h3>
					<div id="promote_sub">
						<img src="__PUBLIC__/img/bee.jpg" alt="bee"><span>Stay Foolish, Live Happy</span>
					</div>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>

		<div class='news part'>
			<hr>
			<h3>兵长有令</h3>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
			<p>这里发布最新的通知</p>
		</div>

		<div class='fruit part'>
			<hr>
			<h3>蜂蜜共享</h3>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
			<p>这里是工作室的共享</p>
		</div>

		<div class='chat part'>
			<hr>
			<h3>嗡嗡水区</h3>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
			<p>这是工作室灌水吐槽区</p>
		</div>
	</div>

	<div class='footer'>
		<p class="text-center">© NewBee Studio. All Rights Reserved.</p>
		<p class="text-center">新蜂工作室 ｜ 曦潮书店 ｜ 黑客马拉松</p>
	</div>
</body>
</html>