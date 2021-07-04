<?php
if($_POST['sub_log']){
	//my code*
	$db=new MySQLi("localhost","root","root","advphp");
	$usr=$db->real_escape_string($_POST['user']);
	$pass=$db->real_escape_string(md5($_POST['pass']));
	$mail=$db->real_escape_string(md5($_POST['email']));
	$db->query("INSERT into users(username,password,email) values ('$usr','$pass','$mail') ");
	echo "register is seccefull
<meta http-equiv='refresh' content='5;url=index.php'  />

	";
	exit;
}

?>
<form method="post" action="<?php echo $PHP_SELF; ?>">
username : <input type="text" name="user"><br><br>
password : <input type="password" name="pass"><br><br>
email : <input type="text" name="email"><br><br>
<input type="submit" name="sub_log" value="register">
</form>
<script>
	setTimeout(function(){window.location.href='index.php'},3233)
</script>