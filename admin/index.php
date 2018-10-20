<?php
require 'db.php';
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
                <td><a href="upd.php?id='.$value['id'].'" >|  |</a></td>
             
              </tr>';

    }
    ?>
</table>
<button><a href="upd.php" >|  |</a></button>
</body>
</html>