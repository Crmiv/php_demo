<?php

function time_show()
{
	$time_=time();
	$dat = date("m/d/y G.i:s",$time_);
	echo $dat
}

function check_date( $date )
{
	if(checkdate($date))
	{
		//checkdate return a bool
	}
}

//mktime return a timestamp
function mk_time()
{
	$new_date = mktime(1,1,1,1,1,1) //hour minute second month day year
}



?>
