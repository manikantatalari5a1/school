<?php include('../database_conn.php'); 

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];

if($email=='admin@gmail.com' && $password=='admin')
{
    session_start();
    $_SESSION['login']=true;
   header('Location:../admin/dashboard.php');
}
else{
    echo "Invalid Creditationals";
}
}
?>