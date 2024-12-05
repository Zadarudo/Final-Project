<?php
include_once 'data.php';

$title = $_POST['title'];
$note = $_POST['note'];

$sql = "INSERT INTO memo (title, note)
   VALUES ('$title', '$note');";
   mysqli_query($conn, $sql);

header("location: /Memo/index.php");