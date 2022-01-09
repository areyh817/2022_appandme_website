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
$range = $_POST["range"];
$uname = $_POST["uname"];

$sql = "insert into user(name, num, tel, five, joined) values('$uname', '$unum', '$tel', '$four','$range')";


if ( !mysqli_query ($conn, $sql) )

{

echo("쿼리오류 발생: " . mysqli_error($conn));

}



?>

