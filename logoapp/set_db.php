<?php

$url = "mysql1501.xserver.jp";
$user = "miraiproject_usr";
$pass = "";
$db = "miraiproject_logoanimation1";

$link = mysqli_connect($url, $user, $pass, $db) or die("MySQLへの接続に失敗しました。");
$sdb = mysqli_select_db($link, $db) or die("データベースの選択に失敗しました。");
