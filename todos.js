$("input[type='text']").keypress(function(event){ //adds an event to listen
	if(event.which === 13){ //if enter 
		var todoText = $(this).val();
		$.ajax({
			"url":"create.php",
			"data":{"task":todoText},
			"type":"POST",
			"success":function(data){
				$("ul").append("<li id='" + data + "'>" + todoText + "</li>");
			}
		});
	}
});


