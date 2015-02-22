function reply_info(key1){
	var form = $('#reply_'+key1).find('form');
	var content = form.find('input[name="reply_content"]');
	$('.reply2').hide();
	$('.reply').hide();
	$('#reply_'+key1).slideDown();
	content[0].focus();
}

function reply2_info(key1, id){
	var form = $('#reply2_'+key1).find('form');
	var reply_id = form.find('input[name="reply_id"]');
	// var to_user = form.find('input[name="to_user"]');
	var content = form.find('input[name="reply_content"]');
	reply_id.val(id);
	$('.reply2').hide();
	$('.reply').hide();
	$('#reply2_'+key1).slideDown('slow');
	content[0].focus();
}