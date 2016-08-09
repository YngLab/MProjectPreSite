<?php
if($_POST){
  header('Location: ./mail.php');
}
session_start();
$_SESSION = $_POST;