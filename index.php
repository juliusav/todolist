<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Simple To Do List</title>
		<link rel='stylesheet' href='css/style.css'>

		<?php 
			require('lib/config.php');
			require('lib/classes/list.php');
		?>

	</head>
	<body>
		<div id='menu'>
			test
		</div>

		<div id='container'>
			<?php 
				foreach ($SAMPLE_DATA as $title=>$list) {
					$toDoList = new ToDoList($title, $list);
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