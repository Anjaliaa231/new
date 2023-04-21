<?php
// $con=new mysql   we can also write this or we can write as $con=mysqli_connect()
// four parameter will be pass through (localhost,username,password,database_name)
$con=mysqli_connect('localhost','root','','mystore');
if(!$con){
    die(mysqli_error($con));
    echo"connection successful";
}



?>