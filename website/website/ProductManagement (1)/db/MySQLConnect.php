<?php 
$servername="localhost";
$username="root";
$password="123456";
$database="do_an_web";
$connect = new mysqli($servername,$username,$password,$database);
if ($connect->connect_error){
	die("Lỗi kết nối với CSDL");
}
?>