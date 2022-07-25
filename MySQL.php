<?php
//链接MySQL
@$conn = mysqli_connect('127.0.0.1','root','root') or die('链接MySql数据库失败');
//var_dump($conn);
//define('CONN',mysqli_connect('127.0.0.1','root','root'));
//选择数据库
mysqli_select_db($conn,'demo');
mysqli_query($conn,'set names utf8');

$sql = "select * from spy";
$result = mysqli_query($conn,$sql);

while ($data = mysqli_fetch_assoc($result)) {
    $id = $data['id'];
    echo 'id',$id;
    echo "<br />";
}