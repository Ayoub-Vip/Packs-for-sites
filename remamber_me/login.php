<form method="post" action="<?php echo $PHP_SELF; ?>">
	<input type="text" name="username"><br>
	<input type="password" name="password"><br>
	<input type="checkbox" name="rememberme" value="1"><br>
	<input type="submit" name="submit">
</form>



<?php
if ($_POST['submit']){
$db=new MySQLi("localhost","root","root","advphp");
$username = $db->real_escape_string($_POST['username']);
    $password = md5($db->real_escape_string($_POST['password']));
    
	$checklogin = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    
     if($checklogin->num_rows == 1) 
    {
    	$row = $checklogin->fetch_assoc();
        $email = $row['email'];
        $userid = $row['id'];
		$_SESSION['userid']=$userid;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['LoggedIn'] = 1;
        echo "string";
        
		//remember me
		@$remember_me=$_POST['rememberme'];
		if($remember_me==1){
		$cook_name="Fco_us";
		$time=time()+3600*24*30 ;//30 days
		setcookie($cook_name,'usr='.$username.'&hash='.$password,$time);
		
		};
	}else{
		echo "no string";
	}
}
?>