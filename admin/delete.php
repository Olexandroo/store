<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM `Users` WHERE id ='.$id.'';
mysqli_query($link, $sql);
header('Location: '.$_SERVER['HTTP_REFERER']);