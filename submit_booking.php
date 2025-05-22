<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo_studio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // If connection fails, stop script
}
// Get the form data
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$requests = $_POST['requests'];
// Insert the data into the database
$sql = "INSERT INTO bookings (service, date, time, venue, name, email, phone, requests)
        VALUES ('$service', '$date', '$time', '$venue', '$name', '$email', '$phone', '$requests')";
if ($conn->query($sql) === TRUE) {
    // After successful insertion, redirect to the confirmation page with the booking ID
    $booking_id = $conn->insert_id; // Get the ID of the newly inserted booking
    header("Location: confirmation.php?booking_id=$booking_id"); // Redirect to confirmation page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Show error if insertion fails
}
// Close the connection
$conn->close();
?>