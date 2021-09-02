<?php
$servername='localhost';
$username='root';
$password='';
$database='school';
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
    echo "connected successfully";
}
else
{
    echo "not connectd";
}
?>