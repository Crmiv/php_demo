<?php
$maxsize=2848000; //2M
if(!$HTTP_POST_VARS['submit']){
	$error=" ";   
}

if(!is_uploaded_file($HTTP_POST_FILES['upload_file']['tmp_name']) AND 
	!isset($error)){
		$error = "<b>you must upload a file</b><br /><br />";
		unlink($HTTP_POST_FILES['upload_file']['tmp_name']);
	}
if($HTTP_POST_FILES['upload_file']['size'] > $maxsize AND !isset($error))
{
	$error = "over the limit size";
	unlink($HTTP_POST_FILES['upload_file']['tmp_name']);
}
if($HTTP_POST_FILE['upload_file']['type'] != "image/gif" AND !isset($error))
{
	$error = "<b> only ..file_type </b>"
}

