<?php
	$query = "SELECT * FROM (
		SELECT pid as id, concat(atype, LPAD(aid, 2, '0')) as awd, alvl as level, earned, first
		FROM awards ) awards WHERE id = $PID LIMIT 5;";
?>

