$(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:"viewcontroll/viewcontroll_client.php",
        data:{
        	name:$("#search").val(),
			action:$('#action').val()
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });