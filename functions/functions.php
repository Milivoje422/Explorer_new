<?php

	function redirect($location){
		
		$output='<script>';
		$output=$output."window.location.href='$location'";
		$output=$output.'</script>';

	return $output;

	}

	
