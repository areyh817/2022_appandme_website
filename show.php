<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<style>
  table {
    margin : 0 auto;
    border-top: 1px solid #444444;
    border-collapse: collapse;
    font-family: 'NanumSquare', sans-serif !important;
    width: 70%;
    margin-top : 50px;
    text-align : center;
    font-size : 13.5px;
  }
  th, td {
    padding-top : 50px;
    border-bottom: 1px solid #444444;
    border-left: 1px solid #444444;
    padding: 25px;

  }
  th:first-child, td:first-child {
    border-left: none;
  }
  .openbook{
    width: 70px;
    height:70px;
    
}
span{
    font-family: 'NanumSquare', sans-serif !important;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center; margin-top: 20px;">
        <span class = "addtxt">2022 앱앤미 지원현황</span>
    </div>
</body>
</html>
<?php

// mysql 연결
$url = "localhost";
$id = "root";
$pass = "111111";
$db = "appandme";

$conn = mysqli_connect($url, $id, $pass, $db);

// select
$sql_sel = "select * from user";
$res= mysqli_query($conn, $sql_sel);

if ( !mysqli_query ($conn, $sql_sel) )

{

echo("쿼리오류 발생: " . mysqli_error($conn));

}


?>
<table>
<tr>
    <td style="font-weight:bold; font-size: 16px ">순번</td>
    <td style="font-weight:bold; font-size: 16px ">이름</td>
    <td style="font-weight:bold; font-size: 16px ">학번</td>
    <td style="font-weight:bold; font-size: 16px ">전화번호</td>
    <td style="font-weight:bold; font-size: 16px ">다섯 글자</td>
    <td style="font-weight:bold; font-size: 16px ">지원동기</td>
</tr>
<?php
for($i = 0; $i < mysqli_num_rows($res); $i++){
    $re = mysqli_fetch_row($res);
    echo "<tr>";
    echo "<td>".$re[0]."</td>";
    echo "<td>".$re[1]."</td>";
    echo "<td>".$re[2]."</td>";
    echo "<td>".$re[3]."</td>";
    echo "<td>".$re[4]."</td>";
    echo "<td>".$re[5]."</td>";
?>
<?php
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
?>