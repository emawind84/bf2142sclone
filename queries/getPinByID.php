<?php
function getPinByID($id)
{
	$id_lines  = file(getcwd()."/queries/pin-id.list");
	$name_lines  = file(getcwd()."/queries/pins.list");
	foreach ($id_lines as $key => $value)
	{
		if ($id == intval($value))
			return $name_lines [$key];
	}
}

function getPinCount()
{
	$lines  = file(getcwd()."/queries/pins.list");
	return count($lines);	
}

function getPin($id)
{
	$lines  = file(getcwd()."/queries/pin-id.list");
	return $lines[$id];	
}
?>