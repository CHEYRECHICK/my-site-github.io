<?php


include "auto.html";
// =====================ПРОВЕРКА======================
// ====================АВТОРИЗАЦИЯ ПРОВЕРКА=======================

if (isset($_POST["email_auto"])) {$email_auto = $_POST["email_auto"];}

if (empty($email_auto)) {
    
    echo "<b><span class='login-icon' style='color: red;'>ОШИБКА";
    exit;
}
else
?>