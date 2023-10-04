<!DOCTYPE html>
<html lang="en">
<style>

</style>
<body>
  <div style="text-align:center;">  
  <?php
//server name=localhost
//username=root
//password=empty
//database name= booking
$conn=mysqli_connect("localhost","root","","booking");
if($conn===false)
{
    die("ERROR:could not connect." .mysqli_connect_error());
}
//take all 11 values from form tag
$roomno= $_REQUEST['roomno'];
$name= $_REQUEST['name'];
$address= $_REQUEST['address'];
$state= $_REQUEST['state'];
$email= $_REQUEST['email'];
$phoneno= $_REQUEST['phoneno'];
$indate= $_REQUEST['indate'];
$outdate= $_REQUEST['outdate'];
$noofperson= $_REQUEST['noofperson'];
$nights= $_REQUEST['nights'];
$roomtype= $_REQUEST['roomtype'];

//insert the values to respective row
$sql="INSERT INTO customer VALUES('$roomno','$name','$address','$state','$email','$phoneno','$indate','$outdate','$noofperson','$nights','$roomtype')";

if(mysqli_query($conn, $sql))
{
    echo "<h3> Data Stored In a Database Successfully";
    echo nl2br("\n RoomNo  :  $roomno  \n Name:   $name\nAddress:    $address\n State :   $state\n Email   :  $email\n Phoneno   :    $phoneno\n InDate  :    $indate\n OutDate   :    $outdate\n No Of Person   :   $noofperson\n Nights   :    $nights\n Roomtype   :     $roomtype");
}
else
{
    echo "ERROR: Hush! Sorry $sql".mysqli_error($conn);
}
//close connection
mysqli_close($conn);
echo "<center><a href='index.php'><button type='button'>HOME</button></a></center>"
?>
</div>
</body>
</html>