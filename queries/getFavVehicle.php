<?php
	$count = getVehicleCount();
	$count--;
	$string = '';
	for ($i=0; $i <= $count; $i++)
	{
		$string .= 'time'. $i;
		if($i != $count) $string .=', ';
	}
	$query = "SELECT $string FROM stats_v WHERE pid = $PID LIMIT 1;";
?>
