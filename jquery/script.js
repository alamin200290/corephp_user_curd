

$(document).ready(function(){

	$('#btn').click(function(){
		//$('div>div').html($('input[type=text]').val());

		$.ajax({
			url: 'abc.php',
			type: 'POST',
			data: {'mydata': 'abc'},
			success: function(response){
				alert(response);
			},
			error: function(error){

			}
		});
	});


});




