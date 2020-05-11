$(document).ready(function(){
	$('#submit').click(function(){
		$.ajax({
			type: 'POST',
			url:'post_teacher_lessons.php',
			data:'tch='+$("#tch").val(),
			success:function(msg){
				var lessons = msg.documentElement.children;
				var result = '';
				for(var i=0; i<lessons.length; i++){
					var fields = lessons[i].children;
					for(var j=0; j<fields.length; j++){
						result+=fields[j].localName + ' : ' + fields[j].innerHTML;
						result+='<br>';
					}
					result+='<br>';
				}
				$('#result').html(result);
			}
		});
	});
});