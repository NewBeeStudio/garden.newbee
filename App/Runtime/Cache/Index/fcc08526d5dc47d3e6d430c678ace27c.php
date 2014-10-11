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
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Index_Register_index.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap.min.css">
    <script src='__PUBLIC__/js/bootstrap.min.js'></script>
    <script src='__PUBLIC__/js/jquery.min.js'></script>
    <script>
    	var verify_url = "<?php echo U('Index/Register/verify');?>";
    </script>
    <script src='__PUBLIC__/js/Index_Register_index.js'></script>
</head>
<body>
	<div class="col-md-4"></div>
	<div class="col-md-4" id="register">
		<form class='form-inline' role='form' name='register' method='post' action="<?php echo U('Index/Register/handle_register');?>">
			<div class="form-group">
				<label for='username'>&nbsp;&nbsp;&nbsp;&nbsp;账号：</label>
				<input type='text' name='username' id='username' class='form-control' placeholder='你的姓名'><br>
				<label for='pwd1'>&nbsp;&nbsp;&nbsp;&nbsp;密码：</label>
				<input type='password' name='pwd1' id='pwd1' class='form-control' placeholder='***********'><br>
				<label for='pwd2'>&nbsp;&nbsp;&nbsp;&nbsp;确认：</label>
				<input type='password' name='pwd2' id='pwd2' class='form-control' placeholder='***********'><br>
				<label for='key'>注册码：</label>
				<input type='text' name='key' id='key' class='form-control' placeholder='输入注册码'><br>
				<label for='code'>验证码：</label>
				<input type='text' name='code' id='code' class='form-control' placeholder='输入验证码'><br>
				<img src="<?php echo U('Index/Register/verify');?>" alt="验证码">
				<span>看不清</span>
				<input type='submit' class='btn btn-default disabled' value='注册'></input>
			</div>
		</form>	
	</div>
	<div class="col-md-4"></div>
</body>
</html>