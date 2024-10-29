<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud","3307") or die("connection unsuccessful");
$query="Insert into student(sname,saddress,sclass,sphone) values ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
$result = mysqli_query($conn,$query) or die("query is unsuccessful");
header("Location:http://localhost:8080/crud_html/index.php");

mysqli_close($conn);
 ?>