<?php
require("connection.php");
$id=$_REQUEST['var'];
$res=$con->query("Delete from `productdetais` where `ID`='$id'");
echo("<script>location.href='view.php'</script>");
?>
