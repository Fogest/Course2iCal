<?php
if($_POST['data']) {
	$data = $_POST['data']
	//Let's log this to a log file.
	file_put_contents("log.txt", "Request: " . PHP_EOL . $data . "-------" . PHP_EOL . PHP_EOL, FILE_APPEND);
}