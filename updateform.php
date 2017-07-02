<h1>เพิ่มข้อมุล Student</h1>
<?php
/**
 * Created by PhpStorm.
 * User: wattanapong suttapak
 * Date: 26-Jun-17
 * Time: 8:20 PM
 */
require 'config.php';

$sql = "SELECT * FROM student WHERE id = ".@$_GET['id'];
$query = mysqli_query($conn,$sql);
@$row = mysqli_fetch_array($query) ;//or die("ไม่สามารถหาข้อมูล id = ".@$_GET['id']);
?>
<form method="POST" action="<?=isset($_GET['id'])?'update.php':'insert.php'?>">
	<?php if(@$_GET['id']){ ?>
    <input type="hidden" name="id" value="<?=@$row['id']?>" > 
	<?php } ?>
    <?php foreach($attributes as $key=>$value){ ?>
    <div style="padding:20px;">
        <span><?=$key?></span>
        <span><input type="text" name="<?=$key?>" ></span>
    </div>
	<?php } ?>

    

    <input type="submit" value="<?=isset($_GET['id'])?' แก้ไข':'เพิ่มข้อมูล'?>">
</form>

