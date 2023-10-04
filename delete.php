<?php

$mysql=new mysqli('localhost','root','','booking');

if($mysql->connect_error)
{
    die("connection error".$mysql->connect_error);
}

$roomno=$_POST['roomno'];
$name=$_POST['name'];

$sql="DELETE FROM customer where roomno='$roomno'";

if($mysql->query($sql)===TRUE){
    echo "<center><h1>DELETED SUCCESSFULLY</h1></center>";
}
else{
    echo "ERROR".$sql."<br/>".$mysql->error;
}
$mysql->close();
echo "<center><a href='sqltable.php'><button type='button'><h3>Back</h3></button></a><center>";
?>