// JavaScript Document
function Login(){
	
		email    = $('#emailbox').val();
		password = $('#passwordbox').val();
		action   = $('#action').val();
	
		$.ajax({  

		type:"POST",
		url:"viewcontroll/viewcontroll_user.php",
		data:{action: action, email: email, password: password},

		success: function(data){
			
			if(data==1){
				window.location.href ='mainpage.php';
			}else{
				window.location.href ='login.php';
				alert("Wrong email or password!");
			}
		}
	})
}