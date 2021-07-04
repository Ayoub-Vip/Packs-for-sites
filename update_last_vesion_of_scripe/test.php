<?php
$carrent=2;
$lastest=file_get_contents("http://www.na7w.com/latest.txt");
if($carrent == $lastest){
	echo "the version <b>is</b> a realy update to last version";
}else{
	echo "the version <b> isn't </b> update to last version";
}

?>