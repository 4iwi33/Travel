<?php
// print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '')
    $error = 'Введите email';
elseif (trim($message) == '')
    $error = 'Введите пароль';
elseif (strlen($message) < 10)
    $error = 'Пароль должен быть более 10 символов';

if ($error != '') {
    echo $error;
    exit;
}

header('Location: index.php');
