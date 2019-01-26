$(function() {
	$("body").css({backgroundImage:"url(images/grey.png)"}); 
	$("#resize").css({ width:"200px", height:"200px", borderStyle:"solid", borderWidth:"1px", borderColor:"#FFF", textAlign:"center", backgroundColor:"#FF3030"});
	$("#resize").resizable({maxHeight:"450", maxWidth:"210"});
	$("img").css({width:"300px"});
	$("img").draggable();
	$("img:first").css({marginTop:"20px"});
	$("img:eq(1)").css({marginTop:"10px",});
	

	
    
});
