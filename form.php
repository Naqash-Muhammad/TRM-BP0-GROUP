<php

$servarname=localhost;
$database=my db;
$passward="";
$username=:root;
$conn=mysqli_connect($servarname,$database,$passward,$username);
if($conn){
    echo"connection succesfully";

    
}else
{
    echo"connection failed";
}






?>