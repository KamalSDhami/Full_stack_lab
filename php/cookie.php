<?php
session_start();
setcookie('user','Kamal',time()+3600);
echo $_COOKIE['user']
?>