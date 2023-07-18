<?php
include 'enkripsivariabel.php';
$temp = $_FILES['berkas']['tmp_name'];
$name = $_FILES['berkas']['name'];
$id =   $_POST['id'].'.jpg';
$size = $_FILES['berkas']['size'];
$type = $_FILES['berkas']['type'];
$folder = "berkas/";
if ($size < 500000 and $type =='image/jpeg'){   
    move_uploaded_file($temp, $folder . $id); 
    $id = kunci ($id); //enkripsi nama vile dari url parameter
    $size = kunci ($size); //enkripsi ukuran file
    $type = kunci ($type); //enkripsi type file
    header("location:index.php?pesan=fileterkirim&name=$id&size=$size&type=$type");
}else{
    $id = kunci ($id); //enkripsi nama vile dari url parameter
    $size = kunci ($size); //enkripsi ukuran file
    $type = kunci ($type); //enkripsi type file
    header("location:index.php?pesan=filegagalterkirim&name=$id&size=$size&type=$type");
}
?>