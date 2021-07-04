<?php

$db=new MySQLi("localhost","root","root","chbox");
if($_POST['sub']){

if($_POST['sect']){
	$db->query("UPDATE check_selecte set value='".$_POST['sect']."' WHERE id='1'");
}
};

$get_value=$db->query("SELECT value from check_selecte where id='1' ");
$myrow=$get_value->fetch_assoc();
$therow=$myrow['value'];
?>
<form action="" method="post">
<h3>what is your sex :</h3>

	<label for="boy">I am boy</label>
<input type="checkbox" <?php if($therow === '1') {echo 'checked';} ?> name="sect" value="1" ><br>

	<label for="gerl">I am girl</label>
<input type="checkbox" <?php if($therow === '2') {echo 'checked';} ?> name="sect" value="2"><br>
	
		<input type="submit" name="sub">
</form>



