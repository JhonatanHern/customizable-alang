<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$decoded = json_decode($_POST['data']);
	
	if (
		file_exists('./Alang/'.$decoded->{'lang'}) &&
		preg_match('/^\w*\.json$/', $decoded->{'lang'})) {
		
		$myfile = fopen('./Alang/'.$decoded->{'lang'}, "w");
		fwrite($myfile, json_encode($decoded->{'data'}));
		fclose($myfile);
	}else{
		echo "FALSE";
	}
?>