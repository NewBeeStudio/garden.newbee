$(document).ready(function(){
	$('span').click(function(){
		$('img').attr('src',verify_url+'/'+Math.random());
	});

	$('#username').blur(function(){
		if($.trim($(this).val())==''){
			$(this).val('').attr('placeholder','请输入账号！');
		}
		if($.trim($('#username').val())!='' && $.trim($('#pwd1').val())!='' && $.trim($('#pwd2').val())!=''){
			$('.btn').removeClass('disabled');
		}
	});
	$('#pwd1').blur(function(){
		if($.trim($(this).val())==''){
			$(this).val('').attr('placeholder','请输入密码！');
		}
		if($.trim($('#username').val())!='' && $.trim($('#pwd1').val())!='' && $.trim($('#pwd2').val())!=''){
			$('.btn').removeClass('disabled');
		}
	});
	$('#pwd2').blur(function(){
		if($.trim($(this).val())==''){
			$(this).val('').attr('placeholder','请确认密码！');
		}
		if($.trim($('#username').val())!='' && $.trim($('#pwd1').val())!='' && $.trim($('#pwd2').val())!=''){
			$('.btn').removeClass('disabled');
		}
	});
});