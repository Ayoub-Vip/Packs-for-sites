<?php
if (isset($_POST['sub_log'])) {
	# code...
	$page=htmlspecialchars($_GET['page']);
	echo "login is seccussfal";
	
	?>
	
<meta http-equiv="refresh" content="1;url=<?php echo $page; ?>">
	<?
	exit;
}
?>

<form method="post" action="">
	username : <input type="text" name="name"><br>
	password : <input type="password" name="pass"><br>
	<input type="submit" name="sub_log">
</form>