<?php
// require APP_PATH.'data.php';
function verify($login, $pass, $data_array){
    return isset($data_array[$login]) && $data_array[$login] === md5($pass);
}


?>