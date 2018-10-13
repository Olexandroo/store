<?php
require 'index.php';
$id = $_GET['id'];
var_dump($_GET['id']);
$sql = 'DELETE FROM `Users` WHERE id ='.$id.'';
mysqli_query($link, $sql);
header('Location: index.php');