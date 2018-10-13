<?php
require 'index.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$created_at = date('Y-m-d H:i:s');
$updated_at = $created_at ;
$password =rand(10000,1000000);
$sql ='INSERT INTO `adminstore`.`Users` ( `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) 
              VALUES ('
    ."'".$name."'".' ,'
    ."'".$email."'".' ,'
    ."'".$phone."'".' ,'
    ."'".$password."'".' ,'
    ."'".$created_at."'".' ,'
    ."'".$updated_at."'".')';

var_dump($sql);
mysqli_query($link, $sql);

var_dump(mysqli_error($link));

?>
<html>
<head>
</head>
<body>
<form action="" method="post">
    <input name="email" placeholder="email" >
    <input name="name" placeholder="name">
    <input name="phone" placeholder="phone">
    <button>Save</button>
</form>
</body>
</html>