<?php
$link = mysqli_connect('localhost','root','','adminstore');
if(mysqli_connect_errno($link)){
    echo "Не удалось подключиться к бд".mysqli_connect_error();
}
$res =mysqli_query($link, "SELECT * FROM Users");
$row = mysqli_fetch_all($res,MYSQLI_ASSOC);

//var_dump($row);

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin panel</title>
</head>
<body>
<table align="center" border="1 px solid black" width="100%">
    <tr align="center">
        <td>id</td>
        <td>email</td>
        <td>name</td>
        <td>phone</td>
        <td>created_at</td>
        <td></td>
        <td></td>
    </tr>
    <?php
    foreach ($row as $key => $value) {
        echo '<tr align="center"> 
                <td>' .$value['id'] . '</td>
                <td>' .$value['email'] . '</td>
                <td>' .$value['name'] . '</td>
                <td>' .$value['phone'] . '</td>
                <td>' .$value['created_at'] . '</td>
                <td><a href="newUser.php">|  |</a></td>
                <td><a href="delete.php?id='.$value['id'].'" id="'.$value['id'].'"><button>x</button></a></td>
                <td><a href="update.php?id='.$value['id'].'" >|  |</a></td>
              </tr>';

    }
    ?>

</table>

</body>
</html>