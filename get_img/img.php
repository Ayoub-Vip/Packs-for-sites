<?php
$path='images/*.gif';
$images=glob($path);
print_r($images);
foreach ($images as $single) {
	# code...
	echo "<img src='$single'/>";
}
?>