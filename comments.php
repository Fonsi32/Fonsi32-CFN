
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfn";

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO cfn (Name, Email, Comment) VALUES ('$name', '$email', '$comment')";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Run the SQL query
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

  // Display the data
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. $row["comment"]. "<br>";
  }
} else {
  echo "0 results";
}
  // Close the connection

  header("Location: http://localhost/CFN/CFN/ndole.php", true,  301);
?>


