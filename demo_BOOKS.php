<?php
//use PEAR rewrite
include('login.php');
require_once('DB.php');

$connection = DB::connect("mysql://$db_username:$db_password$db_host/$db_database");
if (DB::isError($connection))
{
	die(DB::errorMessage($connection));
}

$query = "SELECT * FROM ???1 NATURAL JOIN ???2";//???1 ???2 are different databases
$result = $connection->query($query);

if (DB::isError($result))
{
	die(DB::errorMessage($result));
}

while($result_row = result->fetchRow())
{
	//echo
}
$connection->disconnect();

?>
