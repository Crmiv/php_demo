<?php
$filename = "test.php";

// use file operation need complete path unless 
// *.php and the file were in the same dir
$path = "/srv/www/htdocs/";

function test_file($file)
{
	if(file_exists($file))
	{
		//return a bool 
		//and if writable can be write
		
		//unlink($file);  --delete file
	}
	else{
		//create file and execute add context
		//test fun
		touch($file);
	}
}

function tes_fil_right($file)
{
	$value='';
	if(is_readable($file)){
		$value = $value . 'r';	
	}
	if(is_writable($file)){
		$value = $value . 'w';
	}
	if(is_executable($file)){
		$value = $value . 'x';
	}
	//judge $value 
	return $value;
}

function renam($file,$newnm)
{
	$status = rename($file,$newnm);
	if($status){
		echo 'success';
	}
	//and use it can move file
}

?>
