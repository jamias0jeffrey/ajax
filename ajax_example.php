<!DOCTYPE html>
<html>
<head>
	<title>AJAX Example</title>

	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>

	<h2>Type pikachu, charmander or squirtle</h2>
	Input: <input type="text" id="myinput">
	<button id="mybutton">Submit</button>

	<div id="jsonsection"></div>
	<div id="outputsection"></div>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$('#mybutton').click(function(){
				var myinput = $('#myinput').val();

				$.ajax(

						{
							'url':'ajax_server.php', //URL where to send the AJAX request
							'data':{'pokemon':myinput}, //JSON data to send
							'type':'GET', //Type of request: GET or POST
							'success':editHTML, //What function to do after successful AJAX
						}


					);
			});
		});


		function editHTML(jsondata){
			//the parameter is the data sent by server
			$('#jsonsection').html("Recived:" + jsondata);

			if(jsondata != ""){
				var data = JSON.parse(jsondata); //it will read the file as JSON.. converts JSON string to object
				var htmlstr = "<hr>";

				htmlstr += "Name: " + data.name + "<br>";
				htmlstr += "Type: " + data.type + "<br>";
				htmlstr += "Basic Move: " + data.moves.basic + "<br>";
				htmlstr += "Advance Move: " + data.moves.special + "<br>";
				$('#outputsection').html(htmlstr);
			} else {
				$('#outputsection').html("<hr> Pokemon info not found");
			}
		}


	</script>

</body>
</html>