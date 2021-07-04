<?php
session_start();
if(!isset($_SESSION['username'])){
	
if(isset($_COOKIE['acpauth'])){
	
	parse_str($_COOKIE['acpauth']);//Parses the string of the cookie details into variables  usr->$usr
	$username=$usr;
	$password=$hash;
	$checklogin=$db->query("select * from users where username='".$username."' and password='".$password."'");
	
	if($checklogin->num_rows == 1){
		$row = $checklogin->fetch_array(MYSQLI_ASSOC);
        $email = $row['email'];
        $userid=$row['userid'];
		$_SESSION['userid']=$userid;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['LoggedIn'] = 1;
		
		}
	
	
	
	}


}


?>