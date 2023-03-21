<?php
function genera_password($len){
    $password_generator = 'ABCDEFGHIJklmnopqrstuvwxyz0123456789?!%$';
    $password_generata = str_shuffle($password_generator);
    $password = substr($password_generata, 3, $len);
    return $password;
}
?>