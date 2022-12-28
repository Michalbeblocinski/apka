<?php

	$conn = mysqli_connect("localhost", "root", "", "findly");
	if(!$conn){
		echo "Database not connected" . mysqli_connect_error();
	} else {
		
	}
	function debug_to_console($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);
	
		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
?>