<?php
    $host = "localhost";
    $userdb = "root";
    $passdb = "";
    $db = "tpqi";
	$attributes = [
		"username"=>"ชื่อผุ้ใช้",
		"password"=>"รหัสผ่าน",
		"name"=>"ชื่อ",
		"sname"=>"ชื่อจริง",
		"code"=>"รหัส",
		"major"=>"สาขาวิชา",
		"faculty"=>"คณะ",
		"university"=>"มหาวิทยาลัย",
		"gpa"=>"เกรด",
		"gender"=>"เพส",
		"birthdate"=>"วันเดือนปีเกิด"
	];
    $conn = mysqli_connect($host,$userdb,$passdb,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
	
	
	
?>