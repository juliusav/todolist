<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Simple To Do List</title>
		<link rel='stylesheet' href='css/style.css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">		
		<?php 
			require('lib/config.php');
			require('lib/classes/list.php');
		?>

	</head>
	<body>
		<div id='menu'>
			<h1>Hue-Due</h1>
			<h2>Your life, in color.</h2>
		</div>

		<div id='container'>
			<?php 
				foreach ($SAMPLE_DATA as $title=>$list) {
					$toDoList = new ToDoList($title, $list, $SAMPLE_COLORS[$title]);
					$toDoList->generate();
				}
			?>
		</div>

		<div id='footer'>
			test
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src='js/main.js'></script>
	</body>
</html>