<?php

if ($_POST['clean_up']) {
	# code...
	$connect=mysqli_connect("localhost","root","root","");
	echo "done";
	$db->query("truncate table ".$table_name."")
}

?>

<form method="post" action="<?php echo $PHP_SELF; ?>">
<button name="clean_up">click her to clean</button>
</form>