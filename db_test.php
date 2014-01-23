<?php

//include some login message
include('db_login.php');
$connection = mysql_connect($db_host,$db_usernames,$db_password);
if(!$connection)
{
	die("can't connect".mysql_error());
}

$db_select=mysql_select_db($db_database);
if(!$db_select)
{
	//choose database
	die('cannot connect database' . mysql_error());
}
/* $select = ' SELECT ';
 $column = ' * ';
 $from = ' FROM ';
 $tables = ' authors ';
 */
 $query = "SELECT * FROM books NATURAL JOIN authors";
 $result = mysql_query( $query );
//echo "aasa";
 if(!$result)
 {
 	die(mysql_error());
 }
 	echo "aaasa";
while($result_row = mysql_fetch_row(($result)))
 {
 	echo $result_row[1];
	echo $result_row[4];
	echo $result_row[2];
 }
// close connection with mysql
mysql_close($connection);

?>
