
<?php
include ("dbConn.php");

$name = $_POST['Name'];
$email = $_POST['Email'];
$comment = $_POST['Comment'];

$sql = "INSERT INTO cfn2 (Name, Email, Comment) VALUES ('$name', '$email', '$comment')";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


  header("Location: http://localhost/CFN/CFN/ndole.php", true,  301);
?>


