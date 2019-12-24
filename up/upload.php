<?php

$temp_pic_name = $_FILES['upfile']['tmp_name'];
$original_pic_name = $_FILES['upfile']['name'];
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

$pdo = new PDO("mysql:dbname=yamakawa;host:localhost;","root","mysql");
$pdo ->exec("insert into img_upload(image)values('".$original_pic_name."')");

?>