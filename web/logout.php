<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_destroy();
setcookie('src', 0,time()-1);
setcookie('name','',time()-1);
setcookie('avt', '',time()-1);
//var_dump($_COOKIE);exit;
header('location: login.php');
exit;
?>