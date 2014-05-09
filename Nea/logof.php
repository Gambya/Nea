<?php
session_start();
unset($_SESSION['ativado']);
session_destroy();
header('Location:login.php');
?>