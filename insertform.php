<h1>เพิ่มข้อมุล Student</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:20 PM
 */
require 'config.php';
?>
<form method="POST" action="insert.php"> 
	<?php foreach($attributes as $key=>$value){ ?>
    <div style="padding:20px;">
        <span><?=$key?></span>
        <span><input type="text" name="<?=$key?>" ></span>
    </div>
	<?php } ?>


    <input type="submit" value="เพิ่ม">
</form>

