<?php
	require 'config.php';
?>

<br><br><br>
<table border="1">
	<tr>
		<?php foreach($att as $key=>$value){ ?>
		<th><?=$value?></th>
		<?php } ?>
	</tr>
	<tr>
		<?php foreach($att as $key=>$value){ ?>
		<td><input type="text" name="username" value="<?=@$_POST[$key]?>" size="10" ></td>
		<?php } ?>
	</tr>
	<?php while($rows = mysqli_fetch_array($query)){ ?>
	<tr>
		<?php foreach($att as $key=>$value){ ?>
		<td><?=$rows[$key]?></td>
		<?php } ?>
	</tr>
	<?php } ?>
</table>