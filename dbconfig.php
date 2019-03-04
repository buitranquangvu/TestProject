<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$datbase = "dbtuts";
//mysql_connect($host,$user,$password);
$link= mysqli_connect($host, $user, $password, $datbase);
if (!$link) {
    die("Lỗi kết nối tới cơ sở dữ liệu");
}else{
    echo "OK connect !!!";
}
//mysql_select_db($datbase);
?>