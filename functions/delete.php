<?php
session_start();
require '../data.php';

$id = $_GET['id'];
unset($_SESSION['order'][$id]);
header('Location: '.$_SERVER['HTTP_REFERER']);
