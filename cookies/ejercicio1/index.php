<?php

$cookie = $_COOKIE['user'] ?? null;

if (isset($_COOKIE['user']))
    echo $_COOKIE['user'];
else
    setcookie('user', 'John Doe', time()+3600);
