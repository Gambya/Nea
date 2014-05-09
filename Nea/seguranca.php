<?php
session_start();
if($_SESSION['ativado'] != 1){
  unset($_SESSION['ativado']);
  header("Location:login.php");
}
?>