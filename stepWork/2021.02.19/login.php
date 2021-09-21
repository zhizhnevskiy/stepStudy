<?php
session_start();
$_SESSION['user']=$_POST["name"];
header ("Location: index01.php");