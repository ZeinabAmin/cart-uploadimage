<?php
session_start();
require_once "../inc/dbConnection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['submit'])) {

  $name = $_POST['name'];
  $image = $_FILES['image']; //arr

  //  var_dump($image);

  $imageName = $image['name'];
  $imageType = $image['type'];
  $imageTmpName = $image['tmp_name'];
  $imageError = $image['error'];
  $imageSize = $image['size']; //byte
  $imageSizeMb = $imageSize / (1024 ** 2); //mb
  $ext = pathinfo($imageName, PATHINFO_EXTENSION);
  $uploadName = ($name == '') ? $imageName : "$name.$ext";
  move_uploaded_file($imageTmpName, "../uploads/$uploadName");
  header("location:../index.php");

  // if($name =='')
  // {
  // //upload with same name
  // $uploadName = $imageName;
  // }else
  // {
  // //upload with the given name
  // $uploadName = "$name.$ext";
  // }
} else {
  header("location:../index.php");
}
