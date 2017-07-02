<?php
    $host = "localhost";
    $userdb = "root";
    $passdb = "";
    $db = "tpqi";
	$att = [
		"user"=>"ชื่อเข้าใช้",
		"pass"=>"รหัสผ่าน",
		"title"=>"ตำแหน่ง",
		"firstname"=>"ชื่อ",
		"lastname"=>"นามสกุล",
		"email"=>"อีเมล์",
		"jobdescription"=>"รายละเอียดงาน",
		"begindate"=>"วันที่เริ่มต้น"
	];
    $fieldString = ['username','password','name','sname','code','major','faculty','university','gender','birthdate'];
    $fieldDigit = ['gpa'];

    $conn = mysqli_connect($host,$userdb,$passdb,$db);

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }

?>