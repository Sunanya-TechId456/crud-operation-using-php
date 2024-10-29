<?php 
$stu_id =$_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
$conn = mysqli_connect("localhost","root","","crud","3307") or die("connection unsuccessful");
$query="UPDATE student set sname='{$stu_name}',saddress='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' where sid={$stu_id} ";
$result = mysqli_query($conn,$query) or die("query is unsuccessful");
header("Location:http://localhost:8080/crud_html/index.php");

mysqli_close($conn);

 ?>