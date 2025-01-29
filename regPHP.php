<?php 
include "reg.html";

// ====================РЕГИСТРАЦИЯ ПРОВЕРКА=======================
if (isset($_POST["name_reg"])) {$name_reg = $_POST["name_reg"];}
if (isset($_POST["email_reg"])) {$email_reg = $_POST["email_reg"];}



if (empty($name_reg)) {
    
    echo "<b><span class='' style='color: red;'>ОШИБКА";
    exit;
}
else


if (empty($email_reg)) {
    
    echo "<b><span class='' style='color: red;'>ОШИБКА";
    exit;
}
else






?>