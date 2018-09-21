<?php
session_start();
require '../config.php';
require '../data.php';
$product_info = [
  'Category'=>$categories[$_POST['goods']],
  'Name' => $_POST['NameOfProduct'],
  'Description' => $_POST['Description'],
  'Price' => $_POST['Price'],
    'Image path' => $uploadfile
];

file_put_contents(JSON_PATH,json_encode($product_info),FILE_APPEND);
if(!file_exists(FILES_PATH)){
    mkdir(FILES_PATH);
}
$filename = $_FILES['image']['name'];
$uploadfile = FILES_PATH.$filename;

if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
    file_put_contents(JSON_PATH,json_encode($product_info),FILE_APPEND);
    $status = $check[0];
}
else{
    $status = $check[1];
}

header('Location: '.$_SERVER['HTTP_REFERER']);