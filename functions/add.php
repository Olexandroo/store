<?php
session_start();
require '../data.php';

if(isset($_GET['id'])) {
    $_SESSION['order'][$_GET['id']]= [];
    $_SESSION['order'][$_GET['id']]['Product name'] = $goods[$_GET['id']]['Product name'];
    $_SESSION['order'][$_GET['id']]['Price'] = $goods[$_GET['id']]['Price'];
    $_SESSION['order'][$_GET['id']]['URL'] = $goods[$_GET['id']]['URL'];
    $_SESSION['order'][$_GET['id']]['quantity'] = 1;
}

header('Location: '.$_SERVER['HTTP_REFERER']);
?>