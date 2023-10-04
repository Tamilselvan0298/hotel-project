<?php
$mysql= new mysqli("localhost","root","","booking");
if($mysql->connect_error)
{
    die("connection error".$mysql->connect_error);
}

$roomno=$_POST['roomno'];
$name=$_POST['name'];
$indate=$_POST['indate'];
$outdate=$_POST['outdate'];
$nights=$_POST['nights'];


$sql="UPDATE customer SET name='$name',indate='$indate',outdate='$outdate',nights='$nights' WHERE (roomno='$roomno')";

if($mysql->query($sql)=== TRUE)
{
    echo "<center>UPDATED SUCESSFULLY</center>"."<br/>"."<br/>";
}
else{
    echo "ERROR".$sql."<br/>".$mysql->error;
}

$mysql->close();
echo "<center><a href='sqltable.php'><button type='button'>BACK</button></a><center>";
?>