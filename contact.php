<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "photo_studio";  
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the form data
$name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
$message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';
$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting us! We'll get back to you soon.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>