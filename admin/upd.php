<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$created_at = date('Y-m-d H:i:s');
$updated_at = $created_at ;
$password =rand(10000,1000000);
$sql ='UPDATE `Users` SET `name` ='."'".$name."'".',`email`='."'".$email."'".',`phone`='."'".$phone."'".',`password`='."'"
    .$password."'".',`created_at`='."'".$created_at."'".',`updated_at`='."'".$updated_at."'".' WHERE `id` ='."'".$id."'".'';
//soa google
//> 3 deistviy -> videlit v class
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

