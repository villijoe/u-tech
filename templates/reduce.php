<?php 
	function reduce ($string, $count_symbol) { 
		$count_string = strlen ($string);   
		if ($count_string <= $count_symbol) { 
			//$string = strip_tags ($string);  
		}  else { 
			$string =  substr ($string, 0, $count_symbol);
		} 
		return $string; 
	} 
?>