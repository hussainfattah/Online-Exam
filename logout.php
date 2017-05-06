<?php
session_start();
session_destroy();
setcookie('user','',time()-1000);
header('Location:check.php');
?>