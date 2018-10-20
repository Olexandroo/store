<?php
$link = mysqli_connect('localhost','root','','adminstore');
if(mysqli_connect_errno($link)){
    echo "Не удалось подключиться к бд".mysqli_connect_error();
}
$res =mysqli_query($link, "SELECT * FROM Users");
$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
