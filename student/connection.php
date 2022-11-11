<?php
$db=mysqli_connect("localhost","root","","library1");
if(!$db)
{
    die("connection failed".mysqli_connect_error());
}
echo "connected sucessfully.";
?>