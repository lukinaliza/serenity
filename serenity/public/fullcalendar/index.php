<?php
require_once 'config.php';
require_once 'functions.php';
$events = get_events();
$events = get_json($events);

if( !empty($_POST['clickDate']) ){
	print_r($_POST);
	die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FullCalendar</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="fc/fullcalendar.css">
	<link rel="stylesheet" href="fc/fullcalendar.print.css" media="print">
	<link rel="stylesheet" href="css/style.css">
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
</head>
<body>
	
	<div id="calendar"></div>

	<div id="dialog">
		<form>
			<div class="form-group">
				<label for="title">Название события</label>
				<input type="text" class="form-control" id="title" placeholder="Название события">
			</div>
			<div class="form-group">
				<label for="start">Начало события</label>
				<input type="text" class="form-control datepicker" id="start" placeholder="Начало события">
			</div>
			<div class="form-group">
				<label for="end">Конец события</label>
				<input type="text" class="form-control datepicker" id="end" placeholder="Конец события">
			</div>
			<button type="submit" class="btn btn-success">Добавить событие</button>
		</form>
	</div>

	<script>var events = <?php echo $events ?>;</script>
	<script src="fc/lib/moment.min.js"></script>
	<script src="fc/fullcalendar.js"></script>
	<script src="fc/lang-all.js"></script>
	<script src="js/main.js"></script>
</body>
</html>