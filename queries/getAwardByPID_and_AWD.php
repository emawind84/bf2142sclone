<?php
	$query = "SELECT * from (
	SELECT pid as id, concat(atype, LPAD(aid, 2, '0')) as awd, alvl as level, earned, first
	FROM awards ) awards where id = $PID AND awd = $AWD AND level = $LEVEL LIMIT 1";
?>

