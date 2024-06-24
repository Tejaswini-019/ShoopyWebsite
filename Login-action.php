<?php
session_start();
require("connection.php");
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];
$res=$con->query("select * from `login` where `email`='$email' AND `password`='$pass'");
$count=$res->num_rows;
if($count>0){
    $_SESSION['sid']=$pass;
    $_SESSION['semail']=$email;
    header("location:home.php");//url 
}
else{
    echo("<script>alert('UnAuthorized: invalid username and password!');
    location.href = 'index.php'</script>");
}
?>
