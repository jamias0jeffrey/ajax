<?php

$todos = file_get_contents('todo.json'); //reads the content of the file indicated
$todos = json_decode($todos, true); //converts the file contents to PHP associative array

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>To-do List</h1>
	<input type="text" placeholder="Add New To-do">
	<ul>
		<?php
			// var_dump($todos); //displays the content of an array
			foreach ($todos as $key => $todo) {
				echo "<li id='" . $key . "'>" . $todo['task'] . "</li>";
				//0:{taskl:task1, done:true"}
			}
		?>
	</ul>

	<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="todos.js"></script>

</body>
</html>