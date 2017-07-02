<?php
	$conn = mysqli_connect('localhost','root','','ecommerce');
	$conn->set_charset("utf8");
	
	$att = [
		"category_name"=>"ชื่อรายการหมวดหมู",
		"category_desc"=>"คำอธิบาย"
	];

?>