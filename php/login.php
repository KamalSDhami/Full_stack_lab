<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$conn = mysqli_connect("localhost", "root", "", "login");
$sql = "Select * from user where user_id='$user' and password = '$pass'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows ($query)>0){
    echo "<h1> Welcome ".$user."</h1>";
}else{
    echo "<h1>Invalid Credentials</h1>";
}
?>