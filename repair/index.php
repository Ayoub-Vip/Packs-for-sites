<?php
$db=new MySQLi("localhost","root","root","advphp");
if ($db->connect_errno > 0) {
	# code...
	echo "sorryy";
}else{
	$listtables=$db->query("SHOW TABLES");
	if ($listtables == true) {
		# code...
		while ($reporte=$listtables->fetch_array()) {
			# code...
			$db->query("repair table $reporte[0] ");
			$db->query("optimize table $reporte[0] ");

		}
	}

exit;
}

?>