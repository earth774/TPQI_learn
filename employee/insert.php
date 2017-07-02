<?php
	
	require 'config.php';
	if(@$_POST['username']){
		foreach($att as $row=>$value){
			$_value[] = $_POST[$row];
			$_file[] = $row;
		}
		
		$_val = implode("',",$_value)."'";
		$_fil = implode(",",$_file);
	}else{
		include 'form.php';
	}
?>