<?php
require("connection.php");
$productname=$_REQUEST['productname'];
$category=$_REQUEST['category'];
$price=$_REQUEST['price'];
$file=$_FILES['image']['name'];
$brand=$_REQUEST['brand'];
$available=$_REQUEST['available'];
$res=$con->query("insert into `productdetais` (`productname`,`category`,`price`,`image`,`brand`,`available`) values ('$productname','$category','$price','$file','$brand','$available')");
$count=mysqli_affected_rows($con);
move_uploaded_file(($_FILES)['image']['tmp_name'],"upload/".$file);//for store the file in the folder
if($res){
    echo("<script>location.href = 'forms.php'</script>");
}
?>
