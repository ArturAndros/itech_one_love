$(document).ready(function(){
	$('#submit').click(function(){
		$.ajax({
			type: 'POST',
			url:'post_auditorium_lessons.php',
			data:{
				'auditor': $("#auditor").val(),
			},
			success:function(msg){
				$('#result').html('');
				for(var i =0;i<msg.length;i++){
					$('#result').append('ID_Lesson : '+msg[i].ID_Lesson +'<br>');
					$('#result').append('week_day : '+msg[i].week_day +'<br>');
					$('#result').append('lesson_number : '+msg[i].lesson_number +'<br>');
					$('#result').append('auditorium : '+msg[i].auditorium +'<br>');
					$('#result').append('disciple : '+msg[i].disciple +'<br>');
					$('#result').append('type : '+msg[i].type +'<br><br>');
				}
			}
		});
	});
});