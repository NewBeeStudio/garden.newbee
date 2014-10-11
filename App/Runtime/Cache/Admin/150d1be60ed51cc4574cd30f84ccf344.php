<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>thinkPHP test admin</title>
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <meta name='author' content='hlzhang' />
    <link rel='shortcut icon' href=''>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/Admin_Index_index.css">
</head>
<body>
	<div id='header'>this is the header</div>
	
	<div id='content'>
		<?php if(is_array($users)): foreach($users as $key=>$v): ?><p>用户id：<?php echo ($v["int"]); ?></p>
			<p>用户名：<?php echo ($v["username"]); ?></p>
			<p>用户密码：<?php echo ($v["pwd"]); ?></p><?php endforeach; endif; ?>
	</div>

	<div id='footer'>this is the footer</div>
</body>
</html>