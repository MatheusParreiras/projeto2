<?php

if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {

  $targetDir = "uploads/";

  $fileName = $_FILES["image"]["name"];

  $targetFile = $targetDir . $fileName;

  move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
}
?>
