var first = true;
$(document).ready(function(){
	$('#username').keyup(function(){
		if($.trim($(this).val())==''){
			$(this).val('').attr('placeholder','请输入账号！');
		}
		if($.trim($('#username').val())!='' && $.trim($('#pwd').val())!=''){
			$('input.btn').removeClass('disabled');
		}
	});
	$('#pwd').keyup(function(){
		if(first){
			first = false;
		}
		else{
			if($.trim($(this).val())==''){
				$(this).val('').attr('placeholder','请输入密码！');
			}
			if($.trim($('#username').val())!='' && $.trim($('#pwd').val())!=''){
				$('input.btn').removeClass('disabled');
			}
		}
	});
});