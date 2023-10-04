<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the table
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

// Display the table using HTML
echo "<html><head><title>SQL Table in HTML</title></head><body style='background-image:url(pics/sideview.jpg);background-size:cover;background-repeat:no-repeat;backdrop-filter:blur(2px)brightness(80%)'>";
echo "<center><table border='1'style='background-color:orange;padding:5px 2px 2px;' ><form>";
echo "<tr><th>Room No</th><th>Name</th><th>Address</th><th>State</th><th>Email</th><th>Phoneno</th><th>In-Date</th><th>Out-Date</th><th>No Of Person</th><th>Nights</th><th>Room-Type</th></tr>"; // Add more headers as needed
while ($row = $result->fetch_assoc()) {
    echo "<tr><td >" . $row["Roomno"] . "</td><td>" . $row["Name"]."</td><td>".$row["Address"]."</td><td>" .$row["State"]."</td><td>".$row["Email"]."</td><td>".$row["Phoneno"]."</td><td>".$row["Indate"]."</td><td>".$row["Outdate"]."</td><td>".$row["No of Person"]."</td><td>".$row["Nights"]."</td><td>".$row["Roomtype"]."</td></tr>"; // Add more columns as needed
}

echo "</table></form></center><br/><br/> ";
echo "</body></html>";

// Close the database connection
$conn->close();
echo "<center> <a href='admin.php'><button type='button';'>Back</button></center></a><br/><br/>";
echo "<div style='display:inline-flex;'><form action='update.php' method='post' style='border:1px solid black;width:200px;height:300px;padding:30px;margin-left:200px;'><center><label id='roomno'>Room No :</label><input type='number'name='roomno'placeholder='RoomNo'/><br/><br/><label>Name :</label><input type='text'name='name'placeholder='Name'/><br/><br/><label>IN-Date:</label><input type='date' name='indate'/><br/><br/><label id=''>Out-Date:</label><input type='date' name='outdate'/><br/><br/><label>Nights :</label><input type='number' name='nights'/><br/><br/><input type='submit' value='UPDATE'/></center><br/><br/></form><form action='delete.php' method='post' style='border:1px solid black;width:200px;height:200px;padding:30px;margin-left:200px'><center><label id='roomno'>ROOM NO:</label><input type='number'name='roomno'placeholder='RoomNo'/><br/><br/><label>Name :</label><input type='text'name='name'placeholder='Name'/><br/><br/><br/><br/><input type='submit' value='DELETE'/></center></form></div>";
?>

