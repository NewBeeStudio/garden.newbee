function selectfiles(obj){
	var file = obj.files;
  $("#file_info").html('');
	for (var i = 0; i < file.length; i++){
		var msg = '<p>'+file[i].name+'</p>';
		$("#file_info") .append(msg);
	}
}