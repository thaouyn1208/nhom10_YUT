<?php 
$servername="localhost";
$username="root";
$password="123456";
$database="do_an_web";
$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error){
	die("Lỗi kết nối với CSDL");
}
?>