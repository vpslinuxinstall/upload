$(document).ready(function(){
	msg();
});

//清空内容
function clear_msg(){
	$("#msg-content").empty();
}
function msg(){
	//生成0-5的随机数
	var num = parseInt(Math.random()*(4-0+1)+0,10);;
	
	var content = new Array();
	content[0] = '';
	content[1] = '';
	content[2] = '';
	content[3] = '';
	content[4] = '';
	$("#msg-content").append(content[num]);
	window.setTimeout("clear_msg()",9800);
	window.setTimeout("msg()",10000);
}
