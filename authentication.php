<?php
if ($_COOKIE['user'] == 'true')
    setcookie('user', 'true', time() - 60, '/');

else
    setcookie('user', 'true', time() + 60, '/');
header('Location: index.php');
