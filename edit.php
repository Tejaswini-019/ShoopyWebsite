<?php
require("connection.php");
$productname = $_REQUEST['productname'];
$category = $_REQUEST['category'];
$price = $_REQUEST['price'];
$file = $_FILES['image']['name'];
$brand = $_REQUEST['brand'];
$available = $_REQUEST['available'];
$ID = $_REQUEST['var'];
//if the current image is not change by user  use this function
if (!$file) {
    $res = $con->query("UPDATE `productdetais` SET `productname`='$productname',`category`='$category',`price`='$price',`brand`='$brand',`available`='$available' where `ID`='$ID'");
    $count = mysqli_affected_rows($con);
    if ($res) {
        echo ("<script>location.href = 'view.php'</script>");
    }
} else {//elseif the current image is changed by user  use this function
    $res = $con->query("UPDATE `productdetais` SET `productname`='$productname',`category`='$category',`price`='$price',`image`='$file',`brand`='$brand',`available`='$available' where `ID`='$ID'");
    $count = mysqli_affected_rows($con);
    move_uploaded_file(($_FILES)['image']['tmp_name'], "upload/" . $file); //for store the file in the folder
    if ($res) {
        echo ("<script>location.href = 'view.php'</script>");
    }
}
