<?php
echo $stu_id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','crud','3307')or die("connection is not successful");
$query = "delete from student where sid ={$stu_id}";
$result= mysqli_query($conn,$query) or die("query is not successful");

header("Location: http://localhost:8080/crud_html/");

mysqli_close($conn);
?>