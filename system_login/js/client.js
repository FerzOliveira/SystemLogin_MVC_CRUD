// JavaScript Document
function gotomainpage(){
	
	window.location.href = 'startmenu.php';
}
function gotolistpage(){
	
	window.location.href = 'listpage.php';
}
function gotoeditpage(value){
	
	window.location.href = 'editpage.php?id='+value;
}
function gotoregisterpage(){
	
	window.location.href = 'registerpage.php';
}
function Insert(){ 
	
	name   = $('#namebox').val();
	age    = $('#agebox').val();
	genre  = $('#cbgenre').val();
	city   = $('#cbcity').val();
	action = $('#action').val();
	
	$.ajax({  
		
		type:"POST",
		url:"viewcontroll/viewcontroll_client.php",
		data:{action:action,name:name,age:age,genre:genre,city:city},
		
		success: function(data){
			//console.log(data);
			alert("Registered");		
			gotolistpage();
		}
	})
}

function edit(){ 
	
	id     = $('#idbox').val();
	name   = $('#namebox').val();
	age    = $('#agebox').val();
	genre  = $('#cbgenre').val();
	city   = $('#cbcity').val();
	action = $('#action').val();
	
	$.ajax({  
		
		type:"POST",
		url:"viewcontroll/viewcontroll_client.php",
		data:{action:action,id:id,name:name,age:age,genre:genre,city:city},
		
		success: function(data){
			//console.log(data);
			alert("Updated!");		
			//gotolistpage();
		}
	})
}

function delet(value){ 
	
	var conf = confirm('Are you sure?'); 
	
	if(conf == true){
		$.ajax({  

		type:"POST",
		url:"viewcontroll/viewcontroll_client.php",
		data:{action:"delete",id:value},

		success: function(data){
			alert('Deleted');
			location.reload();
			}
		})
	}
}
