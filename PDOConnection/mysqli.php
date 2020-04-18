<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO testes (nome) VALUES ('rodrigo')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;

  echo "último id: " . $last_id;

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();