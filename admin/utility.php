<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "root","","tech_forum");
		mysqli_select_db ($con,"tech_forum");
		
		$rows = mysqli_query ($con,$SQL);
		
		mysqli_close ($con);
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "root","","tech_forum");
		mysqli_select_db ($con,"tech_forum");
		
		$result = mysqli_query ($con,$SQL);
		
		mysqli_close ($con);
		
		return $result;
	}
?>