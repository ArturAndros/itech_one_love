$(document).ready(function(){
	$('#submit').click(function(){
		$.ajax({
			type: 'POST',
			url:'post_group_lessons.php',
			data:'gr='+$("#gr").val(),
			success:function(msg){
				$('#result').html(msg);
			}
		});
	});
});