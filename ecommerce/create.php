<?php
	$conn = mysqli_connect('localhost','root','','ecommerce');
	$conn->set_charset("utf8");
	$resule = $conn->query("SELECT * FROM `categories`");

?>

<html>
<head>
	<title>d..</title>
</head>
<body>
	<form method="" action="">
		<label>name</label> : <input type="text" name="category_name"><br><br>
		<label>descript</label> <textarea rows="5" cols="5"></textarea>
	</form>
</body>
</html>

<?php
	

?>