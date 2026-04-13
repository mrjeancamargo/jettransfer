

$("#regForm").submit(function(e){
	e.preventDefault();
	$.ajax({
		url : "https://jettransfer.ie/restApi/registerApi.php",
		type : "POST",
		data : $('#regForm').serialize(),
		success : function(data) {
			alert('User created successfully');
			console.log('New User Added...');
			$('#memberId').val(data.id);
			
			

			console.log('data: '+JSON.parse(data))
			
		
		},
		error : function(jqXHR, textStatus, errorThrown) {
			console.log(errorThrown);
			alert('Registration Status:  ' + textStatus);
			console.log('Registration error...');
		}
	});
});
