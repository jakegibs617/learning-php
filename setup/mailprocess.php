<?php
foreach ($_POST as $key => $value) {
    $temp = is_array($value) ? $value : trim($value);	
    if (empty($tmep) && in_array($key, $required)) {
	   $missing[] = $key;
	   $$key = '';	
	} elseif (in_array($key, $expected)) {
		$$key = $temp;
	}
}