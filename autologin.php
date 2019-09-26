<?php
session_start();

$_SESSION["id"] = 1;
$_SESSION["name"] = "Teacher One";
$_SESSION["email"] = "teacherone@school.com";

header("Location:dashboard.php");
?>