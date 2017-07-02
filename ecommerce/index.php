<?php
	require 'config.php';
	$sql = "SELECT * FROM `categories`";
	$query = $conn->query($sql);
?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<a href="actionCreate.php">Insert Data</a>
	<table border="1">
		<thead>	
			<tr>
				<?php foreach($att as $rows=>$value){ ?>
				<th><?=$value?></th>
				<?php } ?>
			</tr>
			<?php while($key = mysqli_fetch_array($query)){ ?>
			<tr>
			<?php foreach($att as $rows=>$value){ ?>
				<td>
				<?=$key[$rows]?>
				</td>
			<?php } ?>
			</tr>
			<?php } ?>
		</thead>	
	</table>
</body>
</html>

<?php
	

?>