<?php
$url = "localhost";
$id = "root";
$password="111111";
$db = "appandme";

$conn = mysqli_connect($url,$id,$password,$db);

// html로부터 값 가져오기
$unum = $_POST["unum"];
$four = $_POST["four"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$uname = $_POST["uname"];

$sql = "insert into apply(name, num, fourword, tel, email) values('$uname', '$unum', '$four', '$tel', '$mail')";
mysqli_query($conn, $sql);
?>
<meta http-equiv="refresh" content="1;url=../index.html">
