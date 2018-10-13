<?php
require 'index.php';
$id =$_GET['id'];
//конект к базе кинуть в глобал
$sql = mysqli_query($link, "SELECT * FROM Users WHERE `id`=$id LIMIT 1");
$row = mysqli_fetch_assoc($sql);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$updated_at = date('Y-m-d H:i:s');
$password =rand(10000,1000000);
$upd ="UPDATE `Users`  SET `name` = '".$name."', `email` = '".$email."', `phone`= '".$phone."', `password` = '".$password."', `updated_at` = '".$updated_at."' WHERE id = $id ";
mysqli_query($link, $upd);
var_dump($upd,mysqli_error($link));
?>


<html>
<head>

</head>
<body>
<form action="" method="post">
    <input type="hidden" value="<?php echo $row['id'] ?>">
    <input name="email" placeholder="email" value="<?php echo $row['email'] ?>">
    <input name="name" placeholder="name" value="<?php echo $row['name'] ?>">
    <input name="phone" placeholder="phone" value="<?php echo $row['phone']?>">
    <button>Save</button>
</form>
</body>
</html>
