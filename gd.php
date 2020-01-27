<?php
$id= $_GET['id'];
$gdrive = "https://www.googleapis.com/drive/v3/files/" .$id. "?alt=media&key=AIzaSyAgJNu0Gt0vAFVCN3g0fqlRrksIrscRiLM";
readfile($file);    
?>
