<?php
session_start();
unset($_SESSION["sid"]);
unset($_SESSION["semail"]);
header("Location:index.php");
?>